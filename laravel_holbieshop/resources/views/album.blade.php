
@for ($i = 0; $i < 8; $i++)
<div class="col-md-3">
    <div class="card mb-4 shadow-md">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="325" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">testimage</text></svg>
        <div class="card-body">
            <p class="card-text text-center">hoka sneakers</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">40.00 TND</small>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-outline-success">
                        <i class="fas fa-money-check-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endfor