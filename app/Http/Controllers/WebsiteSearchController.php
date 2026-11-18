<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebsiteSearchController extends Controller
{
    /**
     * Search the public website content index and show grouped results.
     */
    public function __invoke(Request $request)
    {
        $query = trim((string) $request->query('q', ''));
        $query = Str::limit($query, 100, '');

        $indexPath = resource_path('data/website-search-index.json');
        $index = [];

        if (is_file($indexPath)) {
            $decoded = json_decode((string) file_get_contents($indexPath), true);
            $index = is_array($decoded) ? $decoded : [];
        }

        $results = [];
        $terms = $this->tokenize($query);

        if ($query !== '' && $terms !== []) {
            $synonyms = [
                'derek' => ['hoist', 'crane', 'lifting'],
                'katrol' => ['hoist', 'crane', 'lifting'],
                'angkat' => ['hoist', 'crane', 'lifting'],
                'crane' => ['hoist', 'lifting', 'overhead'],
                'hoist' => ['crane', 'lifting'],
                'pengecatan' => ['painting', 'paint', 'coating'],
                'cat' => ['paint', 'painting', 'coating'],
                'pelapisan' => ['coating', 'painting', 'finishing'],
                'mesin' => ['machinery', 'machine', 'equipment'],
                'machine' => ['machinery', 'equipment'],
                'machinery' => ['machine', 'equipment'],
                'peralatan' => ['equipment', 'machinery'],
                'manufacture' => ['manufacturing', 'production', 'industrial'],
                'otomatisasi' => ['automation', 'automated'],
                'pengemasan' => ['packaging', 'packaging solutions'],
                'pengisian' => ['filling', 'capping'],
                'pembersih' => ['cleaner', 'cleaning', 'solvent'],
                'pencucian' => ['cleaner', 'cleaning', 'solvent'],
                'bau' => ['odor', 'odor control', 'air treatment'],
                'udara' => ['air treatment', 'odor control'],
                'pemeliharaan' => ['maintenance', 'preventive maintenance'],
                'perawatan' => ['maintenance', 'preventive maintenance'],
                'kualitas' => ['quality', 'coating', 'manufacturing'],
                'keselamatan' => ['safety', 'occupational health'],
                'produksi' => ['production', 'manufacturing'],
                'pabrik' => ['industrial', 'manufacturing', 'production'],
                'berita' => ['news', 'insight', 'article'],
                'artikel' => ['news', 'insight'],
                'acara' => ['event', 'exhibition', 'forum', 'workshop'],
                'pameran' => ['exhibition', 'event'],
                'seminar' => ['forum', 'workshop', 'event'],
                'kontak' => ['contact', 'inquiry', 'quotation'],
                'hubungi' => ['contact', 'inquiry'],
                'penawaran' => ['quotation', 'contact', 'inquiry'],
                'pelanggan' => ['customer', 'customers', 'clients'],
                'mitra' => ['partner', 'partners'],
                'visi' => ['vision', 'mission'],
                'misi' => ['mission', 'vision'],
            ];

            foreach ($index as $entry) {
                $title = $this->normalize((string) ($entry['title'] ?? ''));
                $description = $this->normalize((string) ($entry['description'] ?? ''));
                $content = $this->normalize((string) ($entry['content'] ?? ''));
                $score = 0;
                $matchedTerms = 0;

                $normalizedQuery = $this->normalize($query);

                if ($normalizedQuery !== '' && str_contains($title, $normalizedQuery)) {
                    $score += 30;
                }

                if ($normalizedQuery !== '' && str_contains($description, $normalizedQuery)) {
                    $score += 12;
                }

                if ($normalizedQuery !== '' && str_contains($content, $normalizedQuery)) {
                    $score += 5;
                }

                foreach ($terms as $term) {
                    $termMatched = false;

                    if ($this->containsTerm($title, $term)) {
                        $score += 12;
                        $termMatched = true;
                    }

                    if ($this->containsTerm($description, $term)) {
                        $score += 5;
                        $termMatched = true;
                    }

                    $occurrences = $this->countTermMatches($content, $term);
                    if ($occurrences > 0) {
                        $score += min($occurrences, 5) * 1.5;
                        $termMatched = true;
                    }

                    foreach ($synonyms[$term] ?? [] as $synonym) {
                        $synonym = $this->normalize($synonym);
                        if ($synonym === '') {
                            continue;
                        }

                        if ($this->containsTerm($title, $synonym)) {
                            $score += 4;
                            $termMatched = true;
                        } elseif ($this->containsTerm($description, $synonym)) {
                            $score += 2;
                            $termMatched = true;
                        } elseif ($this->containsTerm($content, $synonym)) {
                            $score += 0.8;
                            $termMatched = true;
                        }
                    }

                    if ($termMatched) {
                        $matchedTerms++;
                    }
                }

                if ($score <= 0 || $matchedTerms === 0) {
                    continue;
                }

                $entry['score'] = $score;
                $entry['snippet'] = $this->makeSnippet(
                    (string) ($entry['content'] ?? ''),
                    $terms,
                    (string) ($entry['description'] ?? '')
                );
                $results[] = $entry;
            }

            usort($results, static function (array $a, array $b): int {
                return ($b['score'] <=> $a['score']) ?: strcmp($a['title'], $b['title']);
            });
        }

        $groupOrder = ['Products', 'News', 'Upcoming Events', 'About Us', 'Contact Us', 'Main Pages'];
        $groupedResults = [];

        foreach ($groupOrder as $group) {
            $groupItems = array_values(array_filter(
                $results,
                static fn (array $item): bool => ($item['category'] ?? '') === $group
            ));

            if ($groupItems !== []) {
                $groupedResults[$group] = $groupItems;
            }
        }

        return view('pages.search', [
            'query' => $query,
            'results' => $results,
            'groupedResults' => $groupedResults,
            'totalResults' => count($results),
        ]);
    }

    /** Normalize query and indexed content for case-insensitive matching. */
    private function normalize(string $value): string
    {
        $value = html_entity_decode(strip_tags($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $value = function_exists('mb_strtolower') ? mb_strtolower($value, 'UTF-8') : strtolower($value);
        $value = preg_replace('/\s+/u', ' ', $value) ?? $value;

        return trim($value);
    }

    /** Match whole words while allowing common English suffixes. */
    private function containsTerm(string $haystack, string $needle): bool
    {
        if ($needle === '') {
            return false;
        }

        if (str_contains($needle, ' ')) {
            return str_contains($haystack, $needle);
        }

        $pattern = '/(?<![\p{L}\p{N}])' . preg_quote($needle, '/') . '(?:s|es|ies|ing|ed)?(?![\p{L}\p{N}])/u';

        return preg_match($pattern, $haystack) === 1;
    }

    /** Count whole-word matches for relevance scoring. */
    private function countTermMatches(string $haystack, string $needle): int
    {
        if ($needle === '') {
            return 0;
        }

        if (str_contains($needle, ' ')) {
            return substr_count($haystack, $needle);
        }

        $pattern = '/(?<![\p{L}\p{N}])' . preg_quote($needle, '/') . '(?:s|es|ies|ing|ed)?(?![\p{L}\p{N}])/u';

        return preg_match_all($pattern, $haystack) ?: 0;
    }

    /** Split a query into useful search terms. */
    private function tokenize(string $query): array
    {
        $normalized = $this->normalize($query);
        $tokens = preg_split('/[^\p{L}\p{N}]+/u', $normalized, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $stopWords = ['the', 'and', 'for', 'with', 'from', 'our', 'your', 'us', 'you', 'are', 'is', 'it', 'to', 'in', 'on', 'of', 'at', 'by', 'an', 'as', 'be', 'this', 'that', 'apa', 'dan', 'di', 'ke', 'untuk', 'dari', 'yang', 'dengan', 'kami', 'anda', 'ini', 'itu'];

        return array_values(array_unique(array_filter(
            $tokens,
            static fn (string $token): bool => strlen($token) > 1 && ! in_array($token, $stopWords, true)
        )));
    }

    /** Build a short, relevant excerpt around the first matching term. */
    private function makeSnippet(string $content, array $terms, string $fallback = ''): string
    {
        $source = trim(preg_replace('/\s+/u', ' ', strip_tags($content)) ?? $content);
        $normalized = $this->normalize($source);
        $position = false;

        foreach ($terms as $term) {
            $position = strpos($normalized, $term);
            if ($position !== false) {
                break;
            }
        }

        if ($position === false || $source === '') {
            $source = trim($fallback) !== '' ? $fallback : $source;
            return Str::limit($source, 190);
        }

        $start = max(0, $position - 65);
        $snippet = function_exists('mb_substr')
            ? mb_substr($source, $start, 210, 'UTF-8')
            : substr($source, $start, 210);

        if ($start > 0) {
            $snippet = '…' . ltrim($snippet);
        }

        if (($start + 210) < (function_exists('mb_strlen') ? mb_strlen($source, 'UTF-8') : strlen($source))) {
            $snippet = rtrim($snippet) . '…';
        }

        return $snippet;
    }
}
