<div class="cookies__modal wrapper">
    <img class="cookies" src="/assets/images/cookie.png" alt="Бисквитки">
    <p>Ние използваме бисквитки за да подобрим потребителското изживяване</p>
    <u>
        <p>Научи повече <a href="/privacy">тук</a></p>
    </u>
    <button id="acceptBtn">Съгласен съм</button>
</div>


<script>
    const cookieBox = document.querySelector(".cookies__modal");
    const acceptButton = document.querySelector("#acceptBtn");

    const executeCodes = () => {

        if (document.cookie.includes("cookieBy=DrYullianMolov")) return;

        cookieBox.classList.add("show");

        acceptButton.addEventListener("click", () => {
            cookieBox.classList.remove("show");

            document.cookie = "cookieBy=DrYullianMolov; max-age=" + 60 * 60 * 24 * 30;
        });
    };

    window.addEventListener("load", executeCodes);
</script>
