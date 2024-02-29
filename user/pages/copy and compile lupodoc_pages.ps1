#copy files
$sourceDir = "D:\htdocs\_lupo\hilfe.ludothekprogramm.ch\user\pages\"
$targetDir = "D:\htdocs\_lupo\hilfe.ludothekprogramm.ch_COMPILED_PAGES\"

Get-ChildItem -Path $targetDir -Recurse -exclude .git | Remove-Item -force -recurse
Get-ChildItem -Path $sourceDir | Copy-Item -Destination $targetDir -Recurse -Container -force

#replace all placeholders with content
Set-Location $targetDir;

$version_year = "2024"
$version_short = "13"
$sprache = "de"

$placeholders = @{
    '{{LUPO_VERSION_YEAR}}' = $version_year
    '{{LUPO_VERSION_SHORT}}' = $version_short
    '{{Setup_LupoXXXX_YY.exe}}' = 'Setup_Lupo'+$version_year+'_'+$sprache+'.exe'
    '{{Update_LupoXXXX_YY.exe}}' = 'Update_Lupo'+$version_year+'_'+$sprache+'.exe'
    '{{LupoXX_Daten.accdb}}' = 'Lupo'+$version_short+'_Daten.accdb'
}

foreach($placeholder in $placeholders.keys)
{
    $search = ${placeholder};
    $replace = $($placeholders.Item($placeholder));

    $configFiles = Get-ChildItem . *.md -rec
    foreach ($file in $configFiles)
    {
        (Get-Content $file.PSPath) |
        Foreach-Object { $_ -replace $search, $replace } |
        Set-Content $file.PSPath
    }
}

Write-Host "Alles kopiert und kompiliert!" -ForegroundColor Green