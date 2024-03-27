<template>
    <footer class="container-fluid">
        <div class="container">
            <div class="footer__items">
                <logo></logo>
                <div class="footer__hyperlinks">
                    <a href="#">Активности</a>
                    <a href="#">Веб-игры</a>
                    <a href="#">О нас</a>
                </div>
            </div>
            <hr>
            <p>© 2023 Tower</p>
        </div>
    </footer>
</template>

<script>

export default {
    name: 'my-footer',
}
</script>

<style scoped lang="scss">
footer {
    background: $color-sub-bg;
    padding: 70px;
    //position: relative;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;

    //z-index: 1;

    .container {
        background: $color-sub-bg;
        margin-top: 0;
        margin-bottom: 0;

        .footer__items {
            display: flex;
            align-items: center;
            //margin-bottom: 50px;

            .logo {
                padding-right: 30px;
            }

            .footer__hyperlinks {
                a {
                    margin-right: 10px;
                }
            }
        }

        p {
            font-size: 0.9em;
        }
    }
}
</style>
