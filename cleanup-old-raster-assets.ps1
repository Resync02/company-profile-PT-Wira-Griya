$ErrorActionPreference = 'Stop'
$assetsPath = Join-Path $PSScriptRoot 'public\assets\images'
if (-not (Test-Path $assetsPath)) {
    throw "Folder not found: $assetsPath. Run this script from the Laravel project root."
}
$extensions = @('.jpg', '.jpeg', '.png')
$removed = 0
$skipped = 0
Get-ChildItem -Path $assetsPath -Recurse -File | Where-Object { $extensions -contains $_.Extension.ToLowerInvariant() } | ForEach-Object {
    $webpPath = Join-Path $_.DirectoryName ($_.BaseName + '.webp')
    if (Test-Path $webpPath) {
        Remove-Item -LiteralPath $_.FullName -Force
        $removed++
    } else {
        Write-Warning "Skipped because replacement was not found: $($_.FullName)"
        $skipped++
    }
}
Write-Host "Removed $removed old raster files. Skipped $skipped files without a matching WebP."
