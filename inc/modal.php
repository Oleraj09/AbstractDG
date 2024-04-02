<div id="project1" class="modal">
    <div class="modal-content">
        <span class="close" id="close1"><img src="./assets/img/Icons/Component.svg" alt=""></span>
        <div class="modal-contents">
            <div class="modal-columm">
                <div class="col-1">
                    <div class="s-title">One Burton</div>
                    <h1 class="s-detailsss">South Salt Lake City, UT</h1>
                    <div class="paragraphs">
                        <p>
                            Following a deep dive into the fundamentals of the market, we are developing a $70M,
                            180-unit ground-up multifamily project in the Downtown district of South Salt Lake –
                            creating the intersection between Downtown Salt Lake City, Silicon Slopes, Sugar House
                            and
                            Park City. In keeping with our investment strategy, we are attracted to the burgeoning
                            urban
                            scene that is courting an engaged tech employee base. We anticipate outsized
                            risk-adjusted
                            returns compared to Downtown projects.
                        </p>
                        <p>
                            A Mid-Century Modern design aesthetic with strong geometric lines creates the building’s
                            exterior, artfully complementing and contrasting with its Rocky Mountain backdrop. A
                            distinctive porte cochere entrance sets a welcoming tone and for the many distinguishing
                            features and amenities of this lifestyle-focused project. A mix of studio to 2BR units
                            are
                            designed to attract an upscale Gen Z audience with completion expected in Q4 2024.
                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/slider/1b.png" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slider/1a.png" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slider/1c.png" alt="Image 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                            <img style="height: 60px;width:40px;" src="./assets/img/Icons/left.png" alt="">
                        </a>
                        <a class="carousel-control-next" href="#" role="button" data-slide="next">
                            <img style="height: 60px;width:40px;" src="./assets/img/Icons/right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-button" id="loop1"><img src="./assets/img/Icons/Group-11xd.svg" alt=""></div>
        </div>
    </div>
</div>
<div id="project2" class="modal">
    <div class="modal-content">
        <span class="close" id="close2"><img src="./assets/img/Icons/Component.svg" alt=""></span>
        <div class="modal-contents">
            <div class="modal-columm">
                <div class="col-1">
                    <div class="s-title">Ballpark District</div>
                    <h1 class="s-detailsss">Salt Lake City, UT</h1>
                    <div class="paragraphs">
                        <p>
                            As Native New Yorkers, we understand the value of transportation. Located in the
                            Ballpark
                            District of Salt Lake City, our new development will be located adjacent to entrance and
                            exit ramps of I-15 as well as caddy-corner to the Trax stop. The city’s new Ballpark
                            District Master Plan has engendered significant interest in this neighborhood and our
                            property is ideally located to capitalize on this transformation. Our site, centrally
                            located to many Valley amenities, is also proximate to some of the neighborhood’s
                            funkiest
                            breweries and restaurants.
                        </p>
                        <p>
                            Our design embraces the authentic industrial vibe of the area’s manufacturing history by
                            reviving the tired existing greenery and expanding it along the façade. Additionally,
                            the
                            façade recaptures a two-story parking structure and repurposes it into a unique piece of
                            art
                            which then climbs upward to meet dark blue brick. The brick has been selected to change
                            color depending upon the angle of the sun – creating a dynamic kaleidoscope of color,
                            pattern and form as a distinguishing feature of the property. Comprised of studio and
                            1BR
                            units to attract a younger a demographic, the building is expected to debut in Q3 2025.


                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/slider/2a.png" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slider/2b.png" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/slider/2c.png" alt="Image 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                            <img style="height: 60px;width:40px;" src="./assets/img/Icons/left.png" alt="">
                        </a>
                        <a class="carousel-control-next" href="#" role="button" data-slide="next">
                            <img style="height: 60px;width:40px;" src="./assets/img/Icons/right.png" alt="">
                        </a>
                    </div>

                </div>
            </div>
            <div class="modal-button" id="loop2"><img src="./assets/img/Icons/Group-11xd.svg" alt=""></div>
        </div>
    </div>
</div>
<?php
while ($teamsp = $teams->fetch_assoc()) {
?>
    <div id="teams<?= $teamsp['id'] ?>" class="team">
        <div class="team-content">
            <span class="close" onclick="closes(<?= $teamsp['id'] ?>)"><img src="./assets/img/Icons/Component.svg" alt=""></span>
            <div class="person-contents">
                <div class="information">
                    <div class="team-title"><?= $teamsp['name'] ?></div>
                    <div class="team-designation"><?= $teamsp['designation'] ?></div>
                    <div class="team-bio"><?= $teamsp['bio'] ?></div>
                </div>
                <div class="twobutton">
                    <div class="prev" onclick="prev(<?= $teamsp['id'] ?>,<?= $rows ?>)"><img src="./assets/img/Icons/Group-11798.svg" alt=""></div>
                    <div class="next" onclick="next(<?= $teamsp['id'] ?>,<?= $rows ?>)"><img src="./assets/img/Icons/Group-118.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>