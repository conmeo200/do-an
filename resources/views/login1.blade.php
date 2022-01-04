<form action="" method="post">
    @csrf
    <div class="input__item">
        <input type="text" placeholder="Email address" name="email">
        <span class="icon_mail"></span>
    </div>
    <div class="input__item">
        <input type="password" placeholder="Password" name="password">
        <span class="icon_lock"></span>
    </div>
    <button type="submit" class="site-btn">Login Now</button>
</form>