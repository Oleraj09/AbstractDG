<section id="Capabolities">
    <div class="capable">
        <div class="outline">
            <div class="contain-body">
                <div class="cap-title">
                    CAPABILITIES
                </div>
                <div class="cap-body">
                    <p>Our team’s strengths reflect a breadth and depth of experience that underpins success. <br>
                        Our areas of expertise include:</p>
                </div>
                <div class="flat-bodys">
                    Our team’s strengths reflect a breadth and depth of experience that underpins success.
                    Our areas of expertise include:
                </div>
                <div class="cap-item">
                    <?php
                    $x = $item % 4;
                    $y = floor($item / 4);
                    $z = $y * 4;
                    $i = 0;
                    $q = $item % 2;
                    while ($icon = $icons->fetch_assoc()) {
                        $i++;
                    ?>
                        <div class="items <?php
                                            if ($item <= 4 && $i <= 4) {
                                                echo 'rmv';
                                            } elseif ($item > 4 && $x == 0 && $i > ($y - 1) * 4) {
                                                echo 'rmv';
                                            } elseif ($item > 4 && $x != 0 && $i > ($y * 4)) {
                                                echo 'rmv';
                                            } else {
                                                echo '';
                                            }
                                            ?>">
                            <div class="item-img"><img style="height:70px;width:70px;" src="./<?= $icon['icon'] ?>" alt=""></div>
                            <div class="item-title">
                                <p><?= strlen($icon['name']) > 50 ? $icon['name'] . "..." : $icon['name'] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>