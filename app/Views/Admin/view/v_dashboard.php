<?= $this->extend('Admin/layout/layout')?>
<?= $this->section('main')?>
<section class="analytic">
  <h1>Analytics</h1>
  <section class="analytic-items orders">
    <section class="analytic-items-title">
      <h4>Total Returns</h4>
      <h2>12.05Rb</h2>
    </section>
    <section class="analytic-items-progress">
      <svg>
        <circle cx="38" cy="38" r="36"></circle>
      </svg>
      <section class="percentage">
        +81%
      </section>
    </section>
  </section>
  <section class="analytic-items visits">
    <section class="analytic-items-title">
      <h4>Site Visits</h4>
      <h2>58.10Rb</h2>
    </section>
    <section class="analytic-items-progress">
      <svg>
        <circle cx="38" cy="38" r="36"></circle>
      </svg>
      <section class="percentage">
        +70%
      </section>
    </section>
  </section>
  <section class="analytic-items searches">
    <section class="analytic-items-title">
      <h4>Searches</h4>
      <h2>73.90Rb</h2>
    </section>
    <section class="analytic-items-progress">
      <svg>
        <circle cx="38" cy="38" r="36"></circle>
      </svg>
      <section class="percentage">
        +48%
      </section>
    </section>
  </section>
  <section class="analytic-items sales">
    <section class="analytic-items-title">
      <h4>Total Sales</h4>
      <h2>$65.80</h2>
    </section>
    <section class="analytic-items-progress">
      <svg>
        <circle cx="38" cy="38" r="36"></circle>
      </svg>
      <section class="percentage">
        -30%
      </section>
    </section>
  </section>
  <section class="analytic-items users">
    <section class="analytic-items-title">
      <h4>Total User</h4>
      <h2>30.5Rb</h2>
    </section>
    <section class="analytic-items-progress">
      <svg>
        <circle cx="38" cy="38" r="36"></circle>
      </svg>
      <section class="percentage">
        +50%
      </section>
    </section>
  </section>
</section>
<section class="box-users">
  <h1>New Users</h1>
  <section class="list-users">
    <section class="list-users-items">
    <img src="<?= base_url()?>src/assets/logo/profile.png" alt="Profile" loading="lazy"/>
    <span class="name">Abdulhawari</span>
    <span class="time">1H Ago</span>
  </section>
    <section class="list-users-items">
    <img src="<?= base_url()?>src/assets/logo/profile.png" alt="Profile" loading="lazy"/>
    <span class="name">Abdulhawari</span>
    <span class="time">1H Ago</span>
  </section>
    <section class="list-users-items">
    <img src="<?= base_url()?>src/assets/logo/profile.png" alt="Profile" loading="lazy"/>
    <span class="name">Abdulhawari</span>
    <span class="time">1H Ago</span>
  </section>
    <section class="list-users-items">
      <i class="ri-lg ri-add-line"></i>
      <span class="more">More</span>
  </section>
  </section>
</section>
<section class="product-list">
  <h1>List Product</h1>
  <?= $this->include('Admin/components/card')?>
</section>
<?= $this->endsection()?>