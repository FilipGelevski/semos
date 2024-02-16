<?php
    $cards = array (
        array(
            'title' => 'Audi',
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ),
        array(
            'title' => 'Chevrolet',
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ),
        array(
            'title' => 'Ford',
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ),
        array(
            'title' => 'Golf',
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ),
        array(
            'title' => 'BMW',
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ),
    );

?>


<section class="s-beginner">
    <div class="s-beginner__inner container">
        <div class="c-headline">
            <div class="c-headline__before">
                Start your cars yourney
            </div>
            <h2 class="c-headline__main">
                Beginner's corner
            </h2>
            <div class="c-headline__after">
                Lorem Ipsum is simply dummy text of the printing and something about it
            </div>
        </div>
    
    <div class="c-cards">
        <div class="c-cards__inner">

            <?php foreach( $cards as $card):
                
            
                $title = $card['title'];
                $desc = $card['desc'];?>

                <div class="c-cards__card">
                    <div class="c-cards_card-header">

                    </div>
                    <div class="c-cards_card-body">

                        <div class="c-cards_card-icon">

                        </div>
                        <div class="c-cards_card-title">
                            <?php echo $card['title'];?>
                        </div>
                        <div class="c-cards_card-desc">
                        <?php echo $desc;?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>


    </div>
</section>