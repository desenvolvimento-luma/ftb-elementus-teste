<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $cookieName = "elementus_ab_variant";
        $variant = $this->request->getCookie($cookieName);

        if (!in_array($variant, ["A", "B"], true)) {
            $variant = random_int(0, 1) === 0 ? "A" : "B";

            setcookie(
                $cookieName,
                $variant,
                [
                    "expires" => time() + 60 * 60 * 24 * 30,
                    "path" => "/",
                    "secure" => !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off",
                    "httponly" => false,
                    "samesite" => "Lax",
                ]
            );
        }

        $data = [
            "abVariant" => $variant,
            "abTestName" => "elementus_lp",
        ];

        if ($variant === "B") {
            return view("elementuscorrimaos/ppci", $data);
        }

        return view('home', $data);
    }

    public function obrigado(): string
    {
        $variant = $this->request->getCookie("elementus_ab_variant");

        $data = [
            "abVariant" => $variant ?: "unknown",
            "abTestName" => "elementus_lp",
        ];

        if ($variant === "B") {
            return view("elementuscorrimaos/ppci_obrigado", $data);
        }

        return view('obrigado', $data);
    }
}