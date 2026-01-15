<?php

namespace App\Services;

class ConverterService
{
    public function transform(string $content, string $targetFormat): string
    {
        return match ($targetFormat) {
            'json_to_php_array' => $this->jsonToPhpArray($content),
            'to_uppercase' => strtoupper($content),
            default => "Formato não suportado.",
        };
    }

    private function jsonToPhpArray(string $json): string
    {
        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return "Erro: JSON Inválido.";
        }
        return var_export($data, true);
    }
}