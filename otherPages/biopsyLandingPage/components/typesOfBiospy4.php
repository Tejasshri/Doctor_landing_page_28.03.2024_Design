<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-inner-container">
        <div class="typesofbiopsy-container__cards-container">
            <div class="biopsy-cards">
                <div class="typesofbiopsy-container__eachcard" onclick="showCard1Inner(event)">
                    <img src="assets\typesofBiopsy\needleBiopsy.webp" alt="" />
                    <p>Needle Biopsy</p>
                    <div class="banner-shape-inner-prev">

                    </div>
                </div>
                <div class="typesofbiopsy-container__eachcard" onclick="showCard2Inner(event)">
                    <img src="assets/ultra-guided-biopssy.png" alt="" />
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
                        X-ray based imaging with detailed
                        cross-sectional views.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Highly effective for visualizing and
                        targeting small or deep-seated
                        Lung Nodules.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Longer procedure due to the setup
                        required for CT scanning.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Involves exposure to ionizing
                        radiation (X-rays) from the
                        CT scanner.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Potential risk of radiation exposure,
                        pneumothorax (lung collapse),
                        bleeding, and infection.
                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 9,999/-</h1>
                <button class="banner__submit-btn">
                    Book Now
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
        background: url("./assets/biopsyBanner.jpg");
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
        padding-top: 1.5rem;

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
        margin-top: auto;
    }

    .typesofbiopsy-container__cards-details-bottom h1 {
        font-size: 1rem;
        margin-top: .5rem;
    }

    .typesofbiopsy-container__cards-details-bottom button {
        margin-top: 0;
    }

    @media screen and (min-width: 768px) {

        .li-marker {
            background-color: var(--brandClr);
            min-width: .3rem;
            width: .3rem;
            height: .3rem;
            border-radius: 50%;
            margin-right: .5rem;
            margin-top: .4rem;

        }

        .typesofbiopsy-inner-container {
            display: flex;
            flex-direction: row;
        }

        .biopsy-cards {}

        .typesofbiopsy-container__eachcard {
            position: relative;
        }

        .banner-shape-inner {
            height: 122%;
            width: 1.4rem;
            border-radius: 0px;
            background-color: white;
            position: absolute;
            right: -1.40rem;
            border-top-right-radius: 1rem;
        }

        .banner-shape-inner-prev {
            height: 122%;
            width: 1.4rem;
            border-radius: 0px;
            background-color: white;
            position: absolute;
            right: -1.40rem;
            border-top-right-radius: 0rem;
            border-bottom-right-radius: 1rem;
        }

        .typesofbiopsy-container__cards-details ul {
            list-style-type: none;
            padding-top: 0;
        }

        .typesofbiopsy-container__cards-details li {
            font-size: .622rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .typesofbiopsy-container__cards-details li:last-child {
            margin-bottom: .8rem;
        }

        .typesofbiopsy-container__cards-details {
            padding: 1rem;
            background: rgba(0, 0, 0, .1);
            background-size: cover;
            height: 15.641rem;
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
            width: 23.1rem;
            position: absolute;
            bottom: 1rem;
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
    // bgInSmall.style.backgroundImage = "url(./assets/biopsyBanner.jpg)";
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
            bgInSmall.style.backgroundImage = "url('./assets/biopsyBanner.jpg')";
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
                        X-ray based imaging with detailed
                        cross-sectional views.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Highly effective for visualizing and
                        targeting small or deep-seated
                        Lung Nodules.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Longer procedure due to the setup
                        required for CT scanning.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Involves exposure to ionizing
                        radiation (X-rays) from the
                        CT scanner.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                        Potential risk of radiation exposure,
                        pneumothorax (lung collapse),
                        bleeding, and infection.
                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 9,999/-</h1>
                <button class="banner__submit-btn">
                    Book Now
                </button>
            </div>
        `;
    };

    function showCard2Inner(event) {
        console.log(window.screen.width < 768, 2)
        if (window.screen.width < 768) {
            shapeEl1.style.display = "none";
            shapeEl2.style.display = "none";
            bgInSmall.style.backgroundImage = "url('./assets/biopsyBanner2.jpg')";
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
                        Uses sound waves for real-time imaging of the Lung.
                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                    Limited by its ability to visualize lung lesions deep within the tissue; better for lesions closer to the chest wall or pleura.


                    </p>

                </li>
                <li>
                    <p class="li-marker">

                    </p>
                    <p>
                    Generally quicker due to real-time ultrasound guidance.

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
                        
Lower risk of radiation exposure but may still involve risks such as pneumothorax and bleeding during needle insertion.
                    </p>

                </li>
            </ul>
            <div class="typesofbiopsy-container__cards-details-bottom">
                <h1>*Starts At Rs. 9,999/-</h1>
                <button class="banner__submit-btn">
                    Book Now
                </button>
            </div>
        `;
    }

    window.addEventListener('resize', () => window.location.reload())
</script>