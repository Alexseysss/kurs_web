<?php

namespace App\Service;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            $data['post_image'] = Storage::disk('public')->put('/images', $data['post_image']);
            Post::firstOrCreate($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            Db::beginTransaction();
            $data['post_image'] = Storage::disk('public')->put('/images', $data['post_image']);
            if(isset($data['post_image'])){
                $data['post_image'] = Storage::disk('public')->put('/images', $data['post_image']);
            }
            $post->update($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
