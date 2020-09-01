<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<div class="container">
    <div class="card-columns">
        @foreach($apparts as $appart)
            <div class="card">
                <img src="{{ $appart->img_annonce }}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $appart->title }}</h5>
                    <p class="card-text">{{ $appart->taille }}
                        {{ $appart->prix }} <br>
                        {{ $appart->ville }}
                    </p>
                    <a href="{{ $appart->url }}" class="btn btn-primary">Voir l'annonce</a>
                </div>
                <div class="card-footer">Ajouté le {{ $appart->created_at->format('d/m/Y H:i') }}</div>
            </div>
        @endforeach
    </div>
</div>