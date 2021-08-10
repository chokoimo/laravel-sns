@if ($is_image)
<figure>
    <img src="{{ storage/images/$user->image }}" width="100px" height="100px">
    <figcaption>現在のプロフィール画像</figcaption>
</figure>
@endif