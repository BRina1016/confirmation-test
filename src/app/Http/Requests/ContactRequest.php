<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel' => ['required'],
            'address' => ['required'],
            'detail' => ['required'],
            'contact' => ['required'],
        ];
    }
    public function messages(){
        return [
            'name.required' => 'お名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'contact.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}