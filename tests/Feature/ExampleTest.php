<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('returns an error response', function () {
    $response = $this->get('/abc');

    $response->assertStatus(200);
});
