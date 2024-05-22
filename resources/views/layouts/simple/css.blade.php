@vite(['public/assets/scss/app.scss'])
<style>
    * {
        cursor: none !important;
        transition: transform 0.1s ease-in-out;
    }
    .cursor_outer {
        pointer-events: none;
        position: absolute;
        border: 1px solid #3fa3f1;
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        z-index: 9999;
        transform: translate(-50%, -50%);
        transition: 0.2s;
        cursor: none;
    }
    .cursor_track {
        pointer-events: none;
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #7366ff;
        z-index: 9999;
        transform: translate(-50%, -50%);
        transition: 0.1s;
        cursor: none;

    }
    .clicked {
        animation: fillBackground 0.4s forwards;
        cursor: none;
    }
    @keyframes fillBackground {
        0% {
            transition: all 20s ease-in-out, transform 20s ease-in-out;
            transform: translate(-50%, -50%) scale(0);
            background-color: transparent;
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
            background-color: #7366ff;
            border: 1px solid transparent;
        }
    }
</style>

