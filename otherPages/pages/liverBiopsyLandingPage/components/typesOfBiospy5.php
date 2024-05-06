<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Liver Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-inner-container">
        <div class="typesofbiopsy-container__cards-container">
            <div class="biopsy-cards">
                <div class="typesofbiopsy-container__eachcard" onclick="showCard1Inner(event)">
                    <img src="..\assets/biopsyImages\typesofBiopsy\needleBiopsy.webp" alt="" />
                    <p>CT Guided Biopsy</p>
                    <div class="banner-shape-inner-prev">

                    </div>
                </div>
                <div class="typesofbiopsy-container__eachcard" onclick="showCard2Inner(event)">
                    <img src="../assets/biopsyImages/ultra-guided-biopsy.webp" alt="" />
                    <p>Ultrasound <br>Guided Biopsy </p>
                    <div class="banner-shape-inner">

                    </div>
                </div>
            </div>
        </div>
        <div class="typesofbiopsy-container__cards-details">
            <ul>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Highly effective for targeting and sampling small, deep-seated liver lesions.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Involves exposure to ionizing radiation (X-rays) from the CT scanner, which may pose cumulative radiation risks.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Typically longer procedure due to the setup required for CT scanning and precise needle guidance within the liver tissue.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Potential risk of radiation exposure, bleeding, and infection; there's also a risk of injury to nearby organs such as the lung or bowel.

                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 9,999/-</h1>
                <button class="banner__submit-btn">
                    <a style="all:unset;" href="#">Book Now</a>
                </button>
            </div>
        </div>
    </div>

</div>
<style>
    .typesofbiopsy-inner-container {
        display: flex;
        flex-direction: column;
    }

    .typesofbiopsy-container__cards-details {
        padding: 1rem;
        background: url("../assets/biopsyImages/biopsyBanner.jpg");
        background-size: cover;
        background-color: transparent;

        @media screen and (max-width: 768px) {
            position: relative;
            top: -.5rem;
            z-index: 999;
        }
    }

    .typesofbiopsy-container__cards-container .biopsy-cards {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1rem;
        z-index: 1000;
    }


    .typesofbiopsy-container__cards-details ul {
        list-style-type: none;
        padding-top: 1.8rem;
    }

    .typesofbiopsy-container__cards-details li {
        display: flex;
        /* align-items: center; */
        text-align: left;
        font-size: 1rem;
        font-weight: 400;
    }

    .typesofbiopsy-container__eachcard {
        z-index: 1000;
    }


    .li-marker {
        background-color: var(--brandClr);
        min-width: .51rem;
        width: .51rem;
        height: .51rem;
        border-radius: 50%;
        margin-right: .5rem;
        margin-top: .4rem;

    }

    .typesofbiopsy-container__cards-details-bottom {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .typesofbiopsy-container__cards-details-bottom h1 {
        font-size: 1rem;
        margin-top: .5rem;
    }

    .typesofbiopsy-container__cards-details-bottom button {
        margin-top: .4rem;
    }

    @media screen and (min-width: 768px) {

        .typesofbiopsy-container {
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .li-marker {
            background-color: var(--brandClr);
            min-width: .3rem;
            width: .3rem;
            height: .3rem;
            border-radius: 50%;
            margin-right: .5rem;
            margin-top: .14rem;
        }

        .typesofbiopsy-inner-container {
            display: flex;
            flex-direction: row;
        }

        .biopsy-cards {}

        .typesofbiopsy-container__eachcard {
            position: relative;
            width: 6rem;
            height: 6rem;
        }

        .typesofbiopsy-container__eachcard img {
            height: 2.96rem;
            width: 2.96rem;
        }

        .typesofbiopsy-container__eachcard p {
            top: 4.4rem;
        }

        .banner-shape-inner {
            height: 112%;
            width: 1.4rem;
            width: .5rem;
            border-radius: 0px;
            background-color: white;
            position: absolute; 
            right: -1.40rem;
            right: -.5rem;
            /* border-top-right-radius: 1rem; */
        }

        .banner-shape-inner-prev {
            height: 112%;
            width: 1.4rem;
            width: .5rem;
            border-radius: 0px;
            background-color: white;
            position: absolute;
            right: -1.40rem;
            right: -.5rem;
            border-top-right-radius: 0rem;
            /* border-bottom-right-radius: 1rem; */
        }

        .typesofbiopsy-container__cards-details ul {
            list-style-type: none;
            padding-top: 0;
        }

        .typesofbiopsy-container__cards-details li {
            font-size: .622rem;
            font-weight: 400;
            margin-bottom: .8rem;
        }

        .typesofbiopsy-container__cards-details li p {
            line-height: .584rem;
        }

        .typesofbiopsy-container__cards-details li:last-child {
            margin-bottom: .8rem;
        }

        .typesofbiopsy-container__cards-details {
            padding: 1rem;
            background: rgba(0, 0, 0, .1);
            background-size: cover;
            height: 12.23rem;
            padding-left: 3rem;
            position: relative;
        }

        .typesofbiopsy-container__cards-container .biopsy-cards {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 0;
            flex-grow: 1;
            height: 100%;
        }

        .typesofbiopsy-container__cards-details-bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: .7rem;
            width: 20.4rem;
        }

        .typesofbiopsy-container__cards-details-bottom h1 {
            font-size: .8rem;
            margin-top: 0rem;
        }

        .typesofbiopsy-container__cards-details-bottom button {
            margin-top: 0;
        }
    }
</style>
<script>
    let shapeEl1 = document.querySelector(".banner-shape-inner");
    let shapeEl2 = document.querySelector(".banner-shape-inner-prev");
    let bgInSmall = document.querySelector(".typesofbiopsy-container__cards-details");
    // bgInSmall.style.backgroundImage = "url(./assets/biopsyImages/biopsyBanner.jpg)";
    shapeEl1.style.display = "";
    shapeEl2.style.display = "none";
    if (window.screen.width < 768) {
        console.log("okay")
    }

    function showCard1Inner(event) {
        console.log(window.screen.width < 768, 1)
        if (window.screen.width < 768) {
            shapeEl1.style.display = "none";
            shapeEl2.style.display = "none";
            bgInSmall.style.backgroundImage = "url('../assets/biopsyImages/biopsyBanner.jpg')";
        } else {
            shapeEl2.style.display = "none";
            shapeEl1.style.display = "inline-block";
            console.log(window.screen.width)
        }
        bgInSmall.innerHTML = `
        <ul>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Highly effective for targeting and sampling small, deep-seated liver lesions.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Involves exposure to ionizing radiation (X-rays) from the CT scanner, which may pose cumulative radiation risks.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Typically longer procedure due to the setup required for CT scanning and precise needle guidance within the liver tissue.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Potential risk of radiation exposure, bleeding, and infection; there's also a risk of injury to nearby organs such as the lung or bowel.

                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 9,999/-</h1>
                <button class="banner__submit-btn">
                    <a style="all:unset;" href="#">Book Now</a>
                </button>
            </div>
        `;
    };

    function showCard2Inner(event) {
        console.log(window.screen.width < 768, 2)
        if (window.screen.width < 768) {
            shapeEl1.style.display = "none";
            shapeEl2.style.display = "none";
            bgInSmall.style.backgroundImage = "url('../assets/biopsyImages/biopsyBanner2.jpg')";
        } else {
            shapeEl2.style.display = "inline-block";
            shapeEl1.style.display = "none";
        }
        bgInSmall.innerHTML = `
            <ul>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Relies on ultrasound imaging for real-time visualization of liver lesions.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                    Limited by the depth of penetration, making it more suitable for surface or larger liver lesions that can be adequately visualized by ultrasound.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                    Generally quicker procedure with real-time ultrasound guidance.


                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                    Does not involve ionizing radiation, making it safer in terms of radiation exposure.

                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        
                    Lower risk of radiation exposure but may still carry risks of bleeding, infection, or injury to adjacent structures during needle insertion into the liver.

                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 2,999/-</h1>
                <button class="banner__submit-btn">
                    <a style="all:unset;" href="#">Book Now</a>
                </button>
            </div>
        `;
    }

    // window.addEventListener('resize', () => window.location.reload())
</script>