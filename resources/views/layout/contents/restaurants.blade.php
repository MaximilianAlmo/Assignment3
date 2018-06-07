

@extends("layout.master")

@section("content")
<div class="container">
      <div class="row">

        <?php
        foreach ($rest as $rest) {
          # code...
          echo "<div class='col-lg-6 portfolio-item'>
          <div class='card h-100'>
          <a href='#'><img class='card-img-top' src='http://placehold.it/700x400' alt=''></a>
          <div class='card-body'>
          <h4 class='card-title'>
          <a href='#'> $rest->name
          </a>
          </h4>
          <p>Typ av mat: <b> $rest->type </b></p>
          <p>Address: $rest->adress</p>
          <p class='card-text'>";

          $avgRate = 0;
          $nrReviews = 0;
          foreach($rest->review as $rating){
            $avgRate += $rating['rating'];
            $nrReviews++;
            $avgRate /= $nrReviews;
            echo "Snittbetyg: " . round($avgRate, 1) . "<br>";
          }
          echo "</p>
          </div>
          </div>
          </div>";
        }
        ?>

      </div>
    </div>
@endsection
