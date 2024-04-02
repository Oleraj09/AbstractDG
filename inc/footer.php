<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').each(function() {
                var $carousel = $(this);
                var $items = $carousel.find('.carousel-item');
                var currentIndex = 0;

                function showItem(index) {
                    $items.removeClass('active');
                    $items.eq(index).addClass('active');
                }

                function nextItem() {
                    currentIndex = (currentIndex + 1) % $items.length;
                    showItem(currentIndex);
                }

                function prevItem() {
                    currentIndex = (currentIndex - 1 + $items.length) % $items.length;
                    showItem(currentIndex);
                }

                $carousel.find('.carousel-control-next').on('click', function(e) {
                    e.preventDefault();
                    nextItem();
                });

                $carousel.find('.carousel-control-prev').on('click', function(e) {
                    e.preventDefault();
                    prevItem();
                });

                showItem(currentIndex);
            });
        });
    </script>
    <script src="./assets/js/function.js"></script>
    <script src="./assets/js/team.js"></script>
    <script src="./assets/js/toggler.js"></script>
</body>
</html>