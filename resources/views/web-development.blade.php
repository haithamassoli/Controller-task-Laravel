@extends('layout.app')
@section('content')

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-11 pt-7 bg-600">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <h6 class="font-sans-serif text-primary fw-bold">Course category</h6>
              <h1 class="mb-6">Web Development</h1>
              <form class="row g-3">
                <div class="col-sm-6 col-md-3">
                  <label class="form-label" for="inputCategories">Categories</label>
                  <select class="form-select" id="inputCategories">
                    <option selected="selected">Web development</option>
                    <option value="1">UX designer</option>
                  </select>
                </div>
                <div class="col-sm-6 col-md-3">
                  <label class="form-label" for="inputLevel">Level</label>
                  <select class="form-select" id="inputLevel">
                    <option selected="selected">All Level</option>
                    <option value="1">Level 1 </option>
                    <option value="2">Level 2 </option>
                    <option value="3">Level 3</option>
                  </select>
                </div>
                <div class="col-sm-6 col-md-3">
                  <label class="form-label" for="inputLanguage">Language</label>
                  <select class="form-select" id="inputLanguage">
                    <option selected="selected">English</option>
                    <option value="1">Bangla</option>
                    <option value="2">Hindi</option>
                  </select>
                </div>
                <div class="col-sm-6 col-md-3">
                  <label class="form-label" for="inputInstructor">Instructor</label>
                  <select class="form-select" id="inputInstructor">
                    <option selected="selected">All Instructor </option>
                  </select>
                </div>
                <div class="col-auto z-index-2">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" style="margin-top:-17rem">

        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/design.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/psychology.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Buddhism and Modern Psychology</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/philosophy.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Philosophy</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/photographs.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Advance on Seeing Through Photographs</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/arguments.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Think Again I: How to Understand Arguments</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/experience-design.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/user-design.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/critical-thinking.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/art-design.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/user-research.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/photographs.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Advance on Seeing Through Photographs</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/ux.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/design.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/critical-thinking.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="assets/img/gallery/art-design-1.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

@endsection