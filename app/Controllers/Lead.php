<?php

namespace App\Controllers;

class Lead extends BaseController
{
    public function store()
    {
        $nome         = $this->request->getPost('nome');
        $email        = $this->request->getPost('email');
        $celular      = $this->request->getPost('celular');
        $regiao       = $this->request->getPost('regiao');
        $areaAtuacao  = $this->request->getPost('atuacao');

        // Dispara webhook Make
        $now = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
        $payload = json_encode([
            'nome'         => $nome,
            'email'        => $email,
            'telefone'     => $celular,
            'regiao'       => $regiao,
            'area-atuacao' => $areaAtuacao,
            'data'         => $now->format('d/m/Y'),
            'hora'         => $now->format('H:i'),
            'page-url'     => $_SERVER['HTTP_REFERER'] ?? 'elementuscorrimaors.com.br',
        ]);

        // Salva CSV local
        $csvPath = ROOTPATH . 'leads.csv';
        $isNew   = !file_exists($csvPath);
        $fp      = fopen($csvPath, 'a');
        if ($isNew) {
            fputcsv($fp, ['nome', 'email', 'telefone', 'regiao', 'area-atuacao', 'data', 'hora']);
        }
        fputcsv($fp, [$nome, $email, $celular, $regiao, $areaAtuacao, $now->format('d/m/Y'), $now->format('H:i')]);
        fclose($fp);

        $ch = curl_init('https://hook.us2.make.com/pc2hfitl1y2au6vx2qxrvhxl8rlh1ik6');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'x-make-apiKey: c82e2388-decb-40b7-81a5-5e1b0a69813d',
        ]);
        $response  = curl_exec($ch);
        $httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        // Log de diagnóstico
        $log = date('d/m/Y H:i:s') . " | HTTP: {$httpCode} | CURL_ERROR: {$curlError} | RESPONSE: {$response}" . PHP_EOL;
        file_put_contents(ROOTPATH . 'make_debug.log', $log, FILE_APPEND);

        // Redireciona para página de obrigado (suporta redirect customizado via campo oculto)
        $allowed = ['/obrigado', '/elementuscorrimaos/ppci/obrigado'];
        $redirectTo = $this->request->getPost('_redirect');
        $redirectTo = in_array($redirectTo, $allowed) ? $redirectTo : '/obrigado';

        return redirect()->to($redirectTo);
    }
}
