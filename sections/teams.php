<section class="teamlist" id="team">
    <div class="team-style">
        <div class="team-outline">
            <div class="team-body">
                <div class="team-image"><img src="./assets/img/Sections/Group 122.png" alt=""></div>
                <div class="team-section">
                    <div class="cap-title" style="margin-top: 30px;">Team</div>
                    <div class="team-items">
                        <?php
                        while ($team = $rs_result->fetch_assoc()) {
                        ?>
                            <div class="team-person" onclick="openModal(<?= $team['id'] ?>)">
                                <div class="team-box">
                                    <div class="person-image"><img style="height:130px;width:130px;" src="./<?= $team['image'] ?>" alt=""></div>
                                    <div class="person-name">
                                        <h3><?= $team['name'] ?></h3>
                                    </div>
                                    <div class="person-designation">
                                        <p><?= $team['designation'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>