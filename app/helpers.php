<?php

if (!function_exists('formatVietnamesePrice')) {
    /**
     * Format price to Vietnamese format with triệu, tỷ
     */
    function formatVietnamesePrice($price, $currency = 'VND')
    {
        if (!$price || $price == 0) {
            return '0 ' . $currency;
        }

        $price = (float) $price;
        
        if ($price >= 1000000000) {
            // Tỷ
            $formatted = number_format($price / 1000000000, 1);
            $formatted = rtrim($formatted, '0');
            $formatted = rtrim($formatted, '.');
            return $formatted . ' tỷ ' . $currency;
        } elseif ($price >= 1000000) {
            // Triệu
            $formatted = number_format($price / 1000000, 1);
            $formatted = rtrim($formatted, '0');
            $formatted = rtrim($formatted, '.');
            return $formatted . ' triệu ' . $currency;
        } elseif ($price >= 1000) {
            // Nghìn
            $formatted = number_format($price / 1000, 1);
            $formatted = rtrim($formatted, '0');
            $formatted = rtrim($formatted, '.');
            return $formatted . ' nghìn ' . $currency;
        } else {
            return number_format($price) . ' ' . $currency;
        }
    }
}

if (!function_exists('formatPricePerSquareMeter')) {
    /**
     * Format price per square meter
     */
    function formatPricePerSquareMeter($totalPrice, $area, $currency = 'VND')
    {
        if (!$totalPrice || !$area || $area == 0) {
            return null;
        }

        $pricePerM2 = $totalPrice / $area;
        return formatVietnamesePrice($pricePerM2, $currency) . '/m²';
    }
}

if (!function_exists('formatShortPrice')) {
    /**
     * Format price with short format (Tr for triệu, T for tỷ)
     */
    function formatShortPrice($price, $currency = 'VND')
    {
        if (!$price || $price == 0) {
            return '0';
        }

        $price = (float) $price;
        
        if ($price >= 1000000000) {
            // Tỷ
            $formatted = number_format($price / 1000000000, 1);
            $formatted = rtrim($formatted, '0');
            $formatted = rtrim($formatted, '.');
            return $formatted . 'T';
        } elseif ($price >= 1000000) {
            // Triệu
            $formatted = number_format($price / 1000000, 1);
            $formatted = rtrim($formatted, '0');
            $formatted = rtrim($formatted, '.');
            return $formatted . 'Tr';
        } else {
            return number_format($price / 1000) . 'K';
        }
    }
}