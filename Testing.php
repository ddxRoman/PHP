<div class="container">
    <div class="container-background"></div>
    <div class="content">
         This content is displayed at full opacity, but the background is only 50% opacity.
    </div>
</div>

<style>

.container {
    position: relative;
    width: 200px;
    height: 300px;
}
.container .container-background {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: url(https://placebear.com/200/300);
    opacity: 0.5;
}
.container .content {
    position: relative;
    z-index: 1;
}
    </style>