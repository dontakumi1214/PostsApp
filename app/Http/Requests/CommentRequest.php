<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'comment.*' => 'required|max:255',
            'comment' => 'required|max:255',
            'post_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'comment.*.required' => 'コメントを入力してください。',
            'comment.*.max' => 'コメントは255字以内で入力してください。',
            'comment.required' => 'コメントを入力してください。',
            'comment.max' => 'コメントは255字以内で入力してください。',
            'post_id.required' => 'ユニークな投稿idが指定されていません。',
        ];
    }
}
