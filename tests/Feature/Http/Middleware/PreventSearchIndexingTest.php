<?php

declare(strict_types=1);

it('sends the noindex header on every response', function (): void {
    $response = $this->get('/login');

    $response->assertOk();
    $response->assertHeader('X-Robots-Tag', 'noindex, nofollow');
});
