<?php

namespace App\Services;

use App\Rerositories\MemberRepository;

/**
 * ログイン機能の管理クラス
 */
class LoginService
{
    protected $memberRepository;

    public function __construct(
        MemberRepository $memberRepository
        )
    {
        $this->memberRepository = $memberRepository;
    }

    public function login($condition)
    {
        $password = $this->getPasswordHash($condition['password']);
        $attr = [
            'email' => $condition['email'],
            'password' => $password,
        ];
        $member = $this->memberRepository->find($attr);
        if (isset($member)) {
            $ret = [
                'code' => '0',
            ];
        } else {
            $ret = [
                'code' => '1',
            ];
        }
        return $ret;
    }

    private function getPasswordHash($str)
    {
        $options = [
            'cost' => 15,
        ];
        $str = password_hash($str,  PASSWORD_DEFAULT, $options);
        return $str;
    }
}
