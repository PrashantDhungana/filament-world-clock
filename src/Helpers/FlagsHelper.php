<?php

namespace Joaopaulolndev\FilamentWorldClock\Helpers;

class FlagsHelper
{
    public static function get(string $timezone): string
    {
        $timezones = [
            'Europe/London' => asset('vendor/blade-flags/country-uk.svg'), // London
            'Europe/Paris' => asset('vendor/blade-flags/country-fr.svg'), // Paris
            'Europe/Berlin' => asset('vendor/blade-flags/country-de.svg'), // Berlin
            'Europe/Madrid' => asset('vendor/blade-flags/country-es.svg'), // Madrid
            'Europe/Rome' => asset('vendor/blade-flags/country-it.svg'), // Rome
            'Europe/Amsterdam' => asset('vendor/blade-flags/country-nl.svg'), // Amsterdam
            'Europe/Brussels' => asset('vendor/blade-flags/country-be.svg'), // Brussels
            'Europe/Vienna' => asset('vendor/blade-flags/country-at.svg'), // Vienna
            'Europe/Stockholm' => asset('vendor/blade-flags/country-se.svg'), // Stockholm
            'Europe/Athens' => asset('vendor/blade-flags/country-gr.svg'), // Athens
            'Europe/Warsaw' => asset('vendor/blade-flags/country-pl.svg'), // Warsaw
            'Europe/Zurich' => asset('vendor/blade-flags/country-ch.svg'), // Zurich
            'Europe/Prague' => asset('vendor/blade-flags/country-cz.svg'), // Prague
            'Europe/Oslo' => asset('vendor/blade-flags/country-no.svg'), // Oslo
            'Europe/Copenhagen' => asset('vendor/blade-flags/country-dk.svg'), // Copenhagen
            'Europe/Helsinki' => asset('vendor/blade-flags/country-fi.svg'), // Helsinki
            'Europe/Istanbul' => asset('vendor/blade-flags/country-tr.svg'), // Istanbul
            'Europe/Lisbon' => asset('vendor/blade-flags/country-pt.svg'), // Lisbon
            'Europe/Budapest' => asset('vendor/blade-flags/country-hu.svg'), // Budapest
            'Europe/Bucharest' => asset('vendor/blade-flags/country-ro.svg'), // Bucharest
            'Europe/Dublin' => asset('vendor/blade-flags/country-ie.svg'), // Dublin
            'Europe/Ljubljana' => asset('vendor/blade-flags/country-si.svg'), // Ljubljana
            'Europe/Luxembourg' => asset('vendor/blade-flags/country-lu.svg'), // Luxembourg
            'Europe/Minsk' => asset('vendor/blade-flags/country-by.svg'), // Minsk
            'Europe/Monaco' => asset('vendor/blade-flags/country-mc.svg'), // Monaco
            'Europe/Riga' => asset('vendor/blade-flags/country-lv.svg'), // Riga
            'Europe/San_Marino' => asset('vendor/blade-flags/country-sm.svg'), // San Marino
            'Europe/Sarajevo' => asset('vendor/blade-flags/country-ba.svg'), // Sarajevo
            'Europe/Sofia' => asset('vendor/blade-flags/country-bg.svg'), // Sofia
            'Europe/Tallinn' => asset('vendor/blade-flags/country-ee.svg'), // Tallinn
            'Europe/Vatican' => asset('vendor/blade-flags/country-va.svg'), // Vatican
            'Europe/Zagreb' => asset('vendor/blade-flags/country-hr.svg'), // Zagreb
            'America/New_York' => asset('vendor/blade-flags/country-us.svg'), // New York
            'America/Los_Angeles' => asset('vendor/blade-flags/country-us.svg'), // Los Angeles
            'America/Chicago' => asset('vendor/blade-flags/country-us.svg'), // Chicago
            'America/Toronto' => asset('vendor/blade-flags/country-ca.svg'), // Toronto
            'America/Mexico_City' => asset('vendor/blade-flags/country-mx.svg'), // Mexico City
            'America/Buenos_Aires' => asset('vendor/blade-flags/country-ar.svg'), // Buenos Aires
            'America/Sao_Paulo' => asset('vendor/blade-flags/country-br.svg'), // São Paulo
            'America/Bogota' => asset('vendor/blade-flags/country-co.svg'), // Bogotá
            'America/Lima' => asset('vendor/blade-flags/country-pe.svg'), // Lima
            'America/Caracas' => asset('vendor/blade-flags/country-ve.svg'), // Caracas
            'America/Santiago' => asset('vendor/blade-flags/country-cl.svg'), // Santiago
            'America/Halifax' => asset('vendor/blade-flags/country-ca.svg'), // Halifax
            'America/Phoenix' => asset('vendor/blade-flags/country-us.svg'), // Phoenix
            'America/Anchorage' => asset('vendor/blade-flags/country-us.svg'), // Anchorage
            'America/Honolulu' => asset('vendor/blade-flags/country-us.svg'), // Honolulu
            'America/Montevideo' => asset('vendor/blade-flags/country-uy.svg'), // Montevideo
            'Asia/Jakarta' => asset('vendor/blade-flags/country-id.svg'), // Jakarta
            'Asia/Singapore' => asset('vendor/blade-flags/country-sg.svg'), // Singapore
            'Asia/Tokyo' => asset('vendor/blade-flags/country-jp.svg'), // Tokyo
            'Asia/Seoul' => asset('vendor/blade-flags/country-kr.svg'), // Seoul
            'Asia/Beijing' => asset('vendor/blade-flags/country-cn.svg'), // Beijing
            'Asia/Taipei' => asset('vendor/blade-flags/country-tw.svg'), // Taipei
            'Asia/Kuala_Lumpur' => asset('vendor/blade-flags/country-my.svg'), // Kuala Lumpur
            'Asia/Bangkok' => asset('vendor/blade-flags/country-th.svg'), // Bangkok
            'Asia/Dubai' => asset('vendor/blade-flags/country-ae.svg'), // Dubai
            'Asia/Kolkata' => asset('vendor/blade-flags/country-in.svg'), // Mumbai (Standard Time for India)
            'Asia/Hong_Kong' => asset('vendor/blade-flags/country-hk.svg'), // Hong Kong
            'Australia/Sydney' => asset('vendor/blade-flags/country-au.svg'), // Sydney
            'Pacific/Auckland' => asset('vendor/blade-flags/country-nz.svg'), // Auckland
            'Etc/UTC' => asset('vendor/blade-flags/country-xx.svg'), // Default flag (UTC)
        ];

        return $timezones[$timezone] ?? '🕒';
    }
}
