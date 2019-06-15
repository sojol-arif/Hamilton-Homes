<?php include('header.php'); ?>

<nav aria-label="breadcrumb" class="ic-breadcrumb">
    <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sell</li>
            </ol>
    </div>
</nav>

<section id="ic-sell-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div id="ic-sell-top-left">
                    <h3>Property Valuation</h3>
                    <p>Thinking about selling your home? It's important to know how much your property is worth in today's market to choose an appropriate selling price.</p>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Beds</label>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Baths</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>   
            </div>
            <div class="col-md-6 col-lg-6">
                <div id="ic-sell-top-right">
                    <ul>
                        <li class="active"><a href="">Estimate<span></span></a></li>
                        <li><a href="">Low<span></span></a></li>
                        <li><a href="">High<span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ic-sell-bottom">
    <div class="container"> 
        <h1>Want a more accurate price estimate?</h1>
        <p>Due to MLS rules, this tool depends on active listings to give you an idea what your home might be worth. Our agents have access to sold listings data, market 
statistics and additional information that can contribute to a much more accurate estimate.</p>
        <a href="" class="ic-btn-black">Get an in person assesment</a>
    </div>
</section>
<!-- Required JavaScript Libraries -->
<?php include('footer.php'); ?>