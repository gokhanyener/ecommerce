<h2>{{config('app.name')}}</h2>
<h1>Hoşgeldiniz {{$user->name}}</h1>
<p>Kullanıcı kaydınız başarıyla oluşturulmuştur.</p>
<p>Lütfen aşağıdaki linke doğrulama için tıklayınız </p>

<h1>
    <a href="{{route('register-confirmation',$user->activation_code)}}">Tıklayınız</a>
</h1>
