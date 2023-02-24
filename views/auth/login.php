<?
require_once "../layouts/header.php" ;

$login = new \App\Controllers\Auth\LoginController();

if (!empty($_REQUEST['username'])){
    $login->index();
}

?>

<main class="form-signin text-center">
    <form action="" method="post">
        <img class="mb-4" src="../../assets/media/img/login.png" alt="" height="100">
        <h1 class="h3 mb-3 fw-normal">لطفا وارد شوید</h1>

        <div class="form-floating">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="نام کاربری">
            <label for="floatingInput">نام کاربری</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="رمز عبور">
            <label for="floatingPassword">رمز عبور</label>
        </div>

<!--        <div class="checkbox mb-3">-->
<!--            <label>-->
<!--                <input name="remember" type="checkbox" value="remember-me"> مرا به خاطر بسپار-->
<!--            </label>-->
<!--        </div>-->
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">ورود</button>
    </form>
</main>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        justify-content: center;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<?
require_once "../layouts/footer.php" ;
?>






