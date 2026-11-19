$ErrorActionPreference = 'Stop'

if (-not (Test-Path 'package.json')) {
    throw 'Jalankan script ini dari root proyek Laravel (folder yang berisi package.json).'
}

Write-Host 'Membangun ulang asset frontend melalui Vite...' -ForegroundColor Cyan
npm run build
if ($LASTEXITCODE -ne 0) {
    throw 'Vite build gagal. Periksa pesan error npm run build di atas.'
}

Write-Host 'Build frontend selesai. Lakukan hard refresh browser (Ctrl+Shift+R).' -ForegroundColor Green
