<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function ktp($path)
    {
        if(Storage::disk('public')->exists("images/ktp/".$path)){
            $content = Storage::disk('public')->get('images/ktp/'.$path);
            $mime = explode('.',$path)[1];
            $array_mime     = [
                'css'   => 'text/css',
                'sccs'  => 'text/less',
                'js'    => 'text/javascript',
                'json'  => 'application/json',
                'pdf'   => 'application/pdf',
                'png'   => 'image/png',
                'jpg'   => 'image/jpeg',
                'jpeg'  => 'image/jpeg',
                'gif'   => 'image/gif',
                'ico'   => 'image/x-icon',
                'map'   => 'application/octet-stream',
                'eot'   => 'application/vnd.ms-fontobject',
                'svg'   => 'image/svg+xml',
                'svgz'  => 'image/svg+xml',
                'bmp'   => 'image/x-bmp',
                'webp'   => 'image/webp',
                'ttf'   => 'font/ttf',
                'woff'  => 'font/woff',
                'woff2' => 'font/woff2',
                'otf'   => 'font/opentype',
                'avi'   => 'video/avi',
                'mp4'   => 'video/mp4',
                '3gp'   => 'video/3gpp',
                'webm'  => 'video/webm',
                'webmanifest' => 'application/manifest+json',
                'txt' => 'text/plain'
            ];
            if(array_key_exists($mime,$array_mime)){
                $mime = $array_mime[$mime];
            }else{
                $mime = 'text/plain';
            }

            return response($content)->header('Content-Type',$mime);
        }else{
            return abort(404);
        }
    }

    public function foto_kambing($path)
    {
        if(Storage::disk('public')->exists("images/foto_kambing/".$path)){
            $content = Storage::disk('public')->get('images/foto_kambing/'.$path);
            $mime = explode('.',$path)[1];
            $array_mime     = [
                'css'   => 'text/css',
                'sccs'  => 'text/less',
                'js'    => 'text/javascript',
                'json'  => 'application/json',
                'pdf'   => 'application/pdf',
                'png'   => 'image/png',
                'jpg'   => 'image/jpeg',
                'jpeg'  => 'image/jpeg',
                'gif'   => 'image/gif',
                'ico'   => 'image/x-icon',
                'map'   => 'application/octet-stream',
                'eot'   => 'application/vnd.ms-fontobject',
                'svg'   => 'image/svg+xml',
                'svgz'  => 'image/svg+xml',
                'bmp'   => 'image/x-bmp',
                'webp'   => 'image/webp',
                'ttf'   => 'font/ttf',
                'woff'  => 'font/woff',
                'woff2' => 'font/woff2',
                'otf'   => 'font/opentype',
                'avi'   => 'video/avi',
                'mp4'   => 'video/mp4',
                '3gp'   => 'video/3gpp',
                'webm'  => 'video/webm',
                'webmanifest' => 'application/manifest+json',
                'txt' => 'text/plain'
            ];
            if(array_key_exists($mime,$array_mime)){
                $mime = $array_mime[$mime];
            }else{
                $mime = 'text/plain';
            }

            return response($content)->header('Content-Type',$mime);
        }else{
            return abort(404);
        }
    }

    public function foto_produk($path)
    {
        if(Storage::disk('public')->exists("images/foto_produk/".$path)){
            $content = Storage::disk('public')->get('images/foto_produk/'.$path);
            $mime = explode('.',$path)[1];
            $array_mime     = [
                'css'   => 'text/css',
                'sccs'  => 'text/less',
                'js'    => 'text/javascript',
                'json'  => 'application/json',
                'pdf'   => 'application/pdf',
                'png'   => 'image/png',
                'jpg'   => 'image/jpeg',
                'jpeg'  => 'image/jpeg',
                'gif'   => 'image/gif',
                'ico'   => 'image/x-icon',
                'map'   => 'application/octet-stream',
                'eot'   => 'application/vnd.ms-fontobject',
                'svg'   => 'image/svg+xml',
                'svgz'  => 'image/svg+xml',
                'bmp'   => 'image/x-bmp',
                'webp'   => 'image/webp',
                'ttf'   => 'font/ttf',
                'woff'  => 'font/woff',
                'woff2' => 'font/woff2',
                'otf'   => 'font/opentype',
                'avi'   => 'video/avi',
                'mp4'   => 'video/mp4',
                '3gp'   => 'video/3gpp',
                'webm'  => 'video/webm',
                'webmanifest' => 'application/manifest+json',
                'txt' => 'text/plain'
            ];
            if(array_key_exists($mime,$array_mime)){
                $mime = $array_mime[$mime];
            }else{
                $mime = 'text/plain';
            }

            return response($content)->header('Content-Type',$mime);
        }else{
            return abort(404);
        }
    }
    public function kontrak($path)
    {
        if(Storage::disk('public')->exists("kontrak/".$path)){
            $content = Storage::disk('public')->get('kontrak/'.$path);
            $mime = explode('.',$path)[1];
            $array_mime     = [
                'css'   => 'text/css',
                'sccs'  => 'text/less',
                'js'    => 'text/javascript',
                'json'  => 'application/json',
                'pdf'   => 'application/pdf',
                'png'   => 'image/png',
                'jpg'   => 'image/jpeg',
                'jpeg'  => 'image/jpeg',
                'gif'   => 'image/gif',
                'ico'   => 'image/x-icon',
                'map'   => 'application/octet-stream',
                'eot'   => 'application/vnd.ms-fontobject',
                'svg'   => 'image/svg+xml',
                'svgz'  => 'image/svg+xml',
                'bmp'   => 'image/x-bmp',
                'webp'   => 'image/webp',
                'ttf'   => 'font/ttf',
                'woff'  => 'font/woff',
                'woff2' => 'font/woff2',
                'otf'   => 'font/opentype',
                'avi'   => 'video/avi',
                'mp4'   => 'video/mp4',
                '3gp'   => 'video/3gpp',
                'webm'  => 'video/webm',
                'webmanifest' => 'application/manifest+json',
                'txt' => 'text/plain'
            ];
            if(array_key_exists($mime,$array_mime)){
                $mime = $array_mime[$mime];
            }else{
                $mime = 'text/plain';
            }

            return response($content)->header('Content-Type',$mime);
        }else{
            return abort(404);
        }
    }

    public function kontrak_signed($path){
        if(Storage::disk('public')->exists("kontrak_signed/".$path)){
            $content = Storage::disk('public')->get('kontrak_signed/'.$path);
            $mime = explode('.',$path)[1];
            $array_mime     = [
                'css'   => 'text/css',
                'sccs'  => 'text/less',
                'js'    => 'text/javascript',
                'json'  => 'application/json',
                'pdf'   => 'application/pdf',
                'png'   => 'image/png',
                'jpg'   => 'image/jpeg',
                'jpeg'  => 'image/jpeg',
                'gif'   => 'image/gif',
                'ico'   => 'image/x-icon',
                'map'   => 'application/octet-stream',
                'eot'   => 'application/vnd.ms-fontobject',
                'svg'   => 'image/svg+xml',
                'svgz'  => 'image/svg+xml',
                'bmp'   => 'image/x-bmp',
                'webp'   => 'image/webp',
                'ttf'   => 'font/ttf',
                'woff'  => 'font/woff',
                'woff2' => 'font/woff2',
                'otf'   => 'font/opentype',
                'avi'   => 'video/avi',
                'mp4'   => 'video/mp4',
                '3gp'   => 'video/3gpp',
                'webm'  => 'video/webm',
                'webmanifest' => 'application/manifest+json',
                'txt' => 'text/plain'
            ];
            if(array_key_exists($mime,$array_mime)){
                $mime = $array_mime[$mime];
            }else{
                $mime = 'text/plain';
            }

            return response($content)->header('Content-Type',$mime);
        }else{
            return abort(404);
        }
    }
}
