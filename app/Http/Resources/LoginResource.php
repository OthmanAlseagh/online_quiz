<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'full_name' => $this->full_name,
            'email' => $this->email,
            'has_verified_email' => $this->hasVerifiedEmail(),
            'token' => $this['tokenResult']->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => $this['tokenResult']->token->expires_at->toDateTimeString(),
        ];
    }
}
