<?php

namespace App\Http\Controllers;
use OpenApi\Attributes as OA;

#[OA\Info(
    title: 'Perpus API Documentation',
    version: '1.0.0',
    description: 'Dokumentasi API untuk Project Perpustakaan'
)]

#[OA\SecurityScheme(
    securityScheme: 'sanctum',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'Sanctum Token',
    description: 'Masukkan token login tanpa kata Bearer.'
)]

#[OA\Schema(
    schema: 'Book',
    type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'title', type: 'string', example: 'Laskar Pelangi'),
        new OA\Property(property: 'author', type: 'string', example: 'Andrea Hirata'),
        new OA\Property(property: 'publisher', type: 'string', nullable: true),
        new OA\Property(property: 'isbn', type: 'string', example: '9789793062792'),
        new OA\Property(property: 'published_year', type: 'integer', example: 2005),
        new OA\Property(property: 'stock', type: 'integer', example: 10),
        new OA\Property(property: 'description', type: 'string', nullable: true),
        new OA\Property(property: 'created_at', type: 'string', format: 'date-time'),
        new OA\Property(property: 'updated_at', type: 'string', format: 'date-time'),
    ]
)]

#[OA\Schema(
    schema: 'BookCollection',
    type: 'object',
    properties: [
        new OA\Property(
            property: 'data',
            type: 'array',
            items: new OA\Items(ref: '#/components/schemas/Book')
        ),
        new OA\Property(property: 'links', type: 'object'),
        new OA\Property(property: 'meta', type: 'object'),
    ]
)]

#[OA\Schema(
    schema: 'BookRequest',
    type: 'object',
    required: ['title', 'author', 'isbn', 'published_year', 'stock'],
    properties: [
        new OA\Property(property: 'title', type: 'string'),
        new OA\Property(property: 'author', type: 'string'),
        new OA\Property(property: 'publisher', type: 'string', nullable: true),
        new OA\Property(property: 'isbn', type: 'string'),
        new OA\Property(property: 'published_year', type: 'integer'),
        new OA\Property(property: 'stock', type: 'integer'),
        new OA\Property(property: 'description', type: 'string', nullable: true),
    ]
)]

#[OA\Schema(
    schema: 'MessageResponse',
    type: 'object',
    properties: [
        new OA\Property(property: 'message', type: 'string', example: 'Unauthenticated.'),
    ]
)]

#[OA\Schema(
    schema: 'ValidationError',
    type: 'object',
    properties: [
        new OA\Property(property: 'message', type: 'string'),
        new OA\Property(property: 'errors', type: 'object'),
    ]
)]

class OpenApiController
{
    //
}