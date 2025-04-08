<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monitors - TechHub</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Additional styles for monitors page */
      .product-container {
        display: flex;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
      }

      .filter-sidebar {
        width: 25%;
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
      }

      .filter-section {
        margin-bottom: 20px;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 15px;
      }

      .filter-section:last-child {
        border-bottom: none;
      }

      .filter-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
      }

      .filter-content {
        margin-top: 10px;
      }

      .filter-option {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
      }

      .filter-option input {
        margin-right: 8px;
      }

      .filter-option label {
        font-size: 14px;
        color: #4b5563;
      }

      .price-range {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .price-input {
        width: 80px;
        padding: 5px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
      }

      .products-grid {
        width: 75%;
      }

      .products-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }

      .products-count {
        font-size: 14px;
        color: #6b7280;
      }

      .sort-filter {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .sort-select {
        padding: 8px 12px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        background-color: white;
      }

      .view-options {
        display: flex;
        gap: 5px;
      }

      .view-option {
        width: 32px;
        height: 32px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        background-color: white;
        cursor: pointer;
      }

      .view-option.active {
        background-color: #f3f4f6;
        color: #2563eb;
      }

      .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
      }

      .filter-mobile-toggle {
        display: none;
        font-weight: 600;
        padding: 10px 15px;
        margin-bottom: 15px;
        background-color: #f3f4f6;
        border-radius: 6px;
        width: 100%;
        text-align: left;
        border: 1px solid #d1d5db;
      }

      .filter-mobile-toggle i {
        float: right;
        margin-top: 3px;
      }

      .active-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
      }

      .filter-tag {
        background-color: #e5e7eb;
        border-radius: 16px;
        padding: 5px 10px;
        font-size: 12px;
        display: flex;
        align-items: center;
      }

      .filter-tag i {
        margin-left: 5px;
        cursor: pointer;
      }

      .clear-all {
        font-size: 12px;
        color: #4b5563;
        text-decoration: underline;
        cursor: pointer;
      }

      @media (max-width: 768px) {
        .product-container {
          flex-direction: column;
        }

        .filter-sidebar {
          width: 100%;
          margin-bottom: 20px;
          display: none;
        }

        .products-grid {
          width: 100%;
        }

        .product-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .filter-mobile-toggle {
          display: block;
        }
      }

      @media (max-width: 480px) {
        .product-grid {
          grid-template-columns: 1fr;
        }

        .products-header {
          flex-direction: column;
          align-items: flex-start;
          gap: 10px;
        }

        .sort-filter {
          width: 100%;
          justify-content: space-between;
        }
      }
      /* Enhanced Pagination Styles */
      .pagination-container {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
      }

      .pagination a {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 36px;
        height: 36px;
        border-radius: 5px;
        background-color: #f8f9fa;
        color: #4b5563;
        text-decoration: none;
        transition: all 0.2s ease;
        font-weight: 500;
      }

      .pagination a:hover {
        background-color: #e5e7eb;
      }

      .pagination a.active {
        background-color: #2563eb;
        color: white;
      }

      .pagination a.disabled {
        opacity: 0.5;
        pointer-events: none;
      }

      .pagination-arrow {
        padding: 0 12px;
      }

      .pagination-dots {
        margin: 0 5px;
        color: #6b7280;
      }

      .pagination-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #6b7280;
        font-size: 14px;
      }

      .items-per-page {
        display: flex;
        align-items: center;
        gap: 8px;
      }

      .items-per-page select {
        padding: 6px 10px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        background-color: white;
      }

      @media (max-width: 768px) {
        .pagination-info {
          flex-direction: column;
          gap: 10px;
          align-items: flex-start;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include "header.html"; ?>

    <!-- Page Header -->
    <div class="page-header">
      <div class="container">
        <h1>Monitors</h1>
        <nav class="breadcrumb">
          <a href="index.php">Home</a> /
          <a href="#">Peripherals</a> /
          <span>Monitors</span>
        </nav>
      </div>
    </div>

    <!-- Main Content -->
    <main class="container">
      <!-- Mobile filter toggle -->
      <button class="filter-mobile-toggle" id="filter-toggle">
        Filters <i class="fas fa-filter"></i>
      </button>

      <div class="product-container">
        <!-- Filter Sidebar -->
        <aside class="filter-sidebar" id="filter-sidebar">
          <h2>Filters</h2>

          <!-- Active Filters -->
          <div class="active-filters">
            <div class="filter-tag">ASUS <i class="fas fa-times"></i></div>
            <div class="filter-tag">
              $200 - $500 <i class="fas fa-times"></i>
            </div>
            <div class="filter-tag">4K <i class="fas fa-times"></i></div>
            <span class="clear-all">Clear All</span>
          </div>

          <!-- Price Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Price Range <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="price-range">
                <input
                  type="number"
                  class="price-input"
                  placeholder="Min"
                  min="0"
                  value="200"
                />
                <span>to</span>
                <input
                  type="number"
                  class="price-input"
                  placeholder="Max"
                  min="0"
                  value="500"
                />
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-1" checked />
                <label for="price-1">$0 - $199</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-2" checked />
                <label for="price-2">$200 - $499</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-3" />
                <label for="price-3">$500 - $999</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-4" />
                <label for="price-4">$1000+</label>
              </div>
            </div>
          </div>

          <!-- Brand Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Brand <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="brand-1" checked />
                <label for="brand-1">ASUS (24)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-2" />
                <label for="brand-2">Dell (18)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-3" />
                <label for="brand-3">LG (16)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-4" />
                <label for="brand-4">Samsung (15)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-5" />
                <label for="brand-5">Acer (12)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-6" />
                <label for="brand-6">BenQ (10)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-7" />
                <label for="brand-7">MSI (8)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-8" />
                <label for="brand-8">HP (7)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-9" />
                <label for="brand-9">Apple (5)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-10" />
                <label for="brand-10">Gigabyte (5)</label>
              </div>
            </div>
          </div>

          <!-- Resolution Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Resolution <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="res-1" />
                <label for="res-1">Full HD (1080p)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="res-2" />
                <label for="res-2">2K (1440p)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="res-3" checked />
                <label for="res-3">4K (2160p)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="res-4" />
                <label for="res-4">5K</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="res-5" />
                <label for="res-5">8K</label>
              </div>
            </div>
          </div>

          <!-- Panel Type Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Panel Type <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="panel-1" />
                <label for="panel-1">IPS</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="panel-2" />
                <label for="panel-2">VA</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="panel-3" />
                <label for="panel-3">TN</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="panel-4" />
                <label for="panel-4">OLED</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="panel-5" />
                <label for="panel-5">Mini-LED</label>
              </div>
            </div>
          </div>

          <!-- Refresh Rate Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Refresh Rate <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="refresh-1" />
                <label for="refresh-1">60Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-2" />
                <label for="refresh-2">75Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-3" />
                <label for="refresh-3">120Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-4" />
                <label for="refresh-4">144Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-5" />
                <label for="refresh-5">165Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-6" />
                <label for="refresh-6">240Hz</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="refresh-7" />
                <label for="refresh-7">360Hz+</label>
              </div>
            </div>
          </div>

          <!-- Screen Size Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Screen Size <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="size-1" />
                <label for="size-1">20" - 24"</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="size-2" />
                <label for="size-2">25" - 27"</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="size-3" />
                <label for="size-3">28" - 32"</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="size-4" />
                <label for="size-4">34" - 38"</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="size-5" />
                <label for="size-5">40"+ </label>
              </div>
            </div>
          </div>

          <!-- Usage Type Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Usage Type <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="usage-1" />
                <label for="usage-1">Gaming</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="usage-2" />
                <label for="usage-2">Office/Productivity</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="usage-3" />
                <label for="usage-3">Graphic Design</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="usage-4" />
                <label for="usage-4">Video Editing</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="usage-5" />
                <label for="usage-5">Home Entertainment</label>
              </div>
            </div>
          </div>
        </aside>

        <!-- Products Grid -->
        <div class="products-grid">
          <div class="products-header">
            <div class="products-count">Showing 1-12 of 120 products</div>
            <div class="sort-filter">
              <select class="sort-select" aria-label="Sort products">
                <option>Featured</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Rating: High to Low</option>
                <option>Newest First</option>
              </select>
              <div class="view-options">
                <button class="view-option active" title="Grid View">
                  <i class="fas fa-th"></i>
                </button>
                <button class="view-option" title="List View">
                  <i class="fas fa-list"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
              <div class="product-badge">Best Seller</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS ROG Swift PG27UQ"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS ROG Swift PG27UQ 27" 4K 144Hz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(86)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$699.99</span>
                  <span class="old-price">$799.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
              <div class="product-badge sale-badge">Sale -10%</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS TUF Gaming VG289Q"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS TUF Gaming VG289Q 28" 4K 60Hz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(64)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$299.99</span>
                  <span class="old-price">$329.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
              <div class="product-badge new-badge">New</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="ASUS ProArt PA279CV" />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Professional Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS ProArt PA279CV 27" 4K USB-C</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(28)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$449.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
              <div class="product-badge">Best Seller</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="ASUS VZ249HE" />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Office Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS VZ249HE 23.8" Full HD IPS</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(120)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$129.99</span>
                  <span class="old-price">$149.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
              <div class="product-badge sale-badge">Sale -15%</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS ROG Strix XG43UQ"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS ROG Strix XG43UQ 43" 4K 144Hz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(38)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$849.99</span>
                  <span class="old-price">$999.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
              <div class="product-badge new-badge">New</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="ASUS Designo MX27UC" />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Design Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS Designo MX27UC 27" 4K USB-C</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(42)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$479.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
              <div class="product-badge">Premium</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS Eye Care VA27EHE"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Office Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS Eye Care VA27EHE 27" Full HD</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(76)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$169.99</span>
                  <span class="old-price">$189.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 9 -->
            <div class="product-card">
              <div class="product-badge sale-badge">Sale -20%</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS TUF Gaming VG27AQ"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS TUF Gaming VG27AQ 27" 1440p 165Hz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(92)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$319.99</span>
                  <span class="old-price">$399.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card">
              <div class="product-badge">Best Value</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="ASUS VP28UQG" />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS VP28UQG 28" 4K 60Hz Gaming</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(58)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$249.99</span>
                  <span class="old-price">$279.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 11 -->
            <div class="product-card">
              <div class="product-badge top-badge">Editor's Choice</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS ROG Swift PG32UQ"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Gaming Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS ROG Swift PG32UQ 32" 4K 144Hz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(32)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$799.99</span>
                  <span class="old-price">$899.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 12 -->
            <div class="product-card">
              <div class="product-badge new-badge">New</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="ASUS ProArt Display PA247CV"
                />
                <div class="product-actions">
                  <button class="quick-view" title="Quick View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="add-to-wishlist" title="Add to Wishlist">
                    <i class="fas fa-heart"></i>
                  </button>
                  <button class="add-to-compare" title="Compare">
                    <i class="fas fa-exchange-alt"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <div class="product-category">Professional Monitors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >ASUS ProArt Display PA247CV 24" Full HD</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(47)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$219.99</span>
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="pagination-container" aria-label="Product pagination">
            <div class="pagination">
              <a
                href="#"
                class="pagination-arrow disabled"
                aria-label="Previous page"
                title="Previous page"
              >
                <i class="fas fa-chevron-left"></i>
              </a>
              <a href="#" class="active" aria-current="page">1</a>
              <a href="#" aria-label="Page 2">2</a>
              <a href="#" aria-label="Page 3">3</a>
              <span class="pagination-dots">...</span>
              <a href="#" aria-label="Page 10">10</a>
              <a
                href="#"
                class="pagination-arrow"
                aria-label="Next page"
                title="Next page"
              >
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
            <div class="pagination-info">
              <span>Showing page 1 of 10</span>
              <div class="items-per-page">
                <label for="items-per-page">Items per page:</label>
                <select
                  id="items-per-page"
                  aria-label="Number of items per page"
                >
                  <option value="12" selected>12</option>
                  <option value="24">24</option>
                  <option value="36">36</option>
                  <option value="48">48</option>
                </select>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </main>
    <!-- Footer Section -->
    <?php include "footer.html"; ?>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="back-to-top" aria-label="Back to top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
      // Mobile navigation toggle
      const mobileToggle = document.getElementById("mobile-toggle");
      const navLinks = document.getElementById("nav-links");
      const mobileOverlay = document.getElementById("mobile-menu-overlay");

      mobileToggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
        mobileOverlay.classList.toggle("active");
      });

      mobileOverlay.addEventListener("click", () => {
        navLinks.classList.remove("active");
        mobileOverlay.classList.remove("active");
      });

      // Filter sidebar toggle for mobile
      const filterToggle = document.getElementById("filter-toggle");
      const filterSidebar = document.getElementById("filter-sidebar");

      filterToggle.addEventListener("click", () => {
        filterSidebar.style.display =
          filterSidebar.style.display === "block" ? "none" : "block";
        filterToggle.innerHTML =
          filterSidebar.style.display === "block"
            ? 'Hide Filters <i class="fas fa-times"></i>'
            : 'Filters <i class="fas fa-filter"></i>';
      });

      // Filter sections toggle
      const filterTitles = document.querySelectorAll(".filter-title");

      filterTitles.forEach((title) => {
        title.addEventListener("click", () => {
          const content = title.nextElementSibling;
          content.style.display =
            content.style.display === "none" ? "block" : "none";

          const icon = title.querySelector("i");
          icon.className =
            content.style.display === "none"
              ? "fas fa-chevron-down"
              : "fas fa-chevron-up";
        });
      });

      // View options toggle
      const viewOptions = document.querySelectorAll(".view-option");
      const productGrid = document.querySelector(".product-grid");

      viewOptions.forEach((option) => {
        option.addEventListener("click", () => {
          viewOptions.forEach((opt) => opt.classList.remove("active"));
          option.classList.add("active");

          if (option.querySelector("i").classList.contains("fa-list")) {
            productGrid.classList.add("list-view");
          } else {
            productGrid.classList.remove("list-view");
          }
        });
      });

      // Back to top button
      const backToTopButton = document.getElementById("back-to-top");

      window.addEventListener("scroll", () => {
        if (window.pageYOffset > 300) {
          backToTopButton.style.display = "block";
        } else {
          backToTopButton.style.display = "none";
        }
      });

      backToTopButton.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });

      // Load products function
      function loadProducts(page = 1, filters = {}) {
        const queryParams = new URLSearchParams({
          category: "monitor",
          page: page,
          per_page: document.getElementById("items-per-page")?.value || 12,
          ...filters,
        });

        fetch(`get_products.php?${queryParams}`)
          .then((response) => {
            if (!response.ok) {
              throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
          })
          .then((data) => {
            if (data.success) {
              if (data.products && data.products.length > 0) {
                displayProducts(data.products);
                updatePagination(data.pagination);
              } else {
                const productGrid = document.querySelector(".product-grid");
                productGrid.innerHTML =
                  '<div class="no-products">No products found</div>';
              }
            } else {
              console.error("Error loading products:", data.message);
              const productGrid = document.querySelector(".product-grid");
              productGrid.innerHTML = `<div class="error-message">Error loading products: ${data.message}</div>`;
            }
          })
          .catch((error) => {
            console.error("Error fetching products:", error);
            const productGrid = document.querySelector(".product-grid");
            productGrid.innerHTML = `<div class="error-message">Error loading products. Please try again later.</div>`;
          });
      }

      // Display products function
      function displayProducts(products) {
        const productGrid = document.querySelector(".product-grid");
        if (!productGrid) {
          console.error("Product grid element not found");
          return;
        }

        productGrid.innerHTML = "";

        products.forEach((product) => {
          const productCard = createProductCard(product);
          productGrid.appendChild(productCard);
        });
      }

      // Create product card function
      function createProductCard(product) {
        const card = document.createElement("div");
        card.className = "product-card";

        // Add click handler to the entire card
        card.onclick = () => {
          window.location.href = `detailProduct.php?id=${encodeURIComponent(
            product.id
          )}`;
        };

        // Add product badge if it's new
        if (product.features && product.features.includes("new")) {
          const badge = document.createElement("div");
          badge.className = "product-badge new-badge";
          badge.textContent = "New";
          card.appendChild(badge);
        }

        // Add sale badge if price is discounted
        if (product.sale_price && product.sale_price < product.regular_price) {
          const discount = Math.round(
            ((product.regular_price - product.sale_price) /
              product.regular_price) *
              100
          );
          const badge = document.createElement("div");
          badge.className = "product-badge sale-badge";
          badge.textContent = `Sale -${discount}%`;
          card.appendChild(badge);
        }

        // Create product image container
        const imageContainer = document.createElement("div");
        imageContainer.className = "product-image";

        // Add main product image
        const img = document.createElement("img");
        img.src =
          product.images && product.images.length > 0
            ? product.images[0]
            : "/api/placeholder/240/180";
        img.alt = product.name;
        imageContainer.appendChild(img);

        // Add product actions
        const actions = document.createElement("div");
        actions.className = "product-actions";

        // Add quick view button
        const quickViewBtn = document.createElement("button");
        quickViewBtn.className = "quick-view";
        quickViewBtn.title = "Quick View";
        quickViewBtn.innerHTML = '<i class="fas fa-eye"></i>';
        actions.appendChild(quickViewBtn);

        // Add wishlist button
        const wishlistBtn = document.createElement("button");
        wishlistBtn.className = "add-to-wishlist";
        wishlistBtn.title = "Add to Wishlist";
        wishlistBtn.innerHTML = '<i class="fas fa-heart"></i>';
        actions.appendChild(wishlistBtn);

        // Add compare button
        const compareBtn = document.createElement("button");
        compareBtn.className = "add-to-compare";
        compareBtn.title = "Compare";
        compareBtn.innerHTML = '<i class="fas fa-exchange-alt"></i>';
        actions.appendChild(compareBtn);

        imageContainer.appendChild(actions);
        card.appendChild(imageContainer);

        // Create product info container
        const infoContainer = document.createElement("div");
        infoContainer.className = "product-info";

        // Add category
        const category = document.createElement("div");
        category.className = "product-category";
        category.textContent = `${product.brand} Monitors`;
        infoContainer.appendChild(category);

        // Add name
        const name = document.createElement("h3");
        name.className = "product-name";
        const nameLink = document.createElement("a");
        nameLink.href = `detailProduct.php?id=${encodeURIComponent(
          product.id
        )}`;
        nameLink.textContent = product.name;
        name.appendChild(nameLink);
        infoContainer.appendChild(name);

        // Add ratings
        const ratings = document.createElement("div");
        ratings.className = "product-ratings";
        ratings.innerHTML = `
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span class="rating-count">(${product.rating || 0})</span>
        `;
        infoContainer.appendChild(ratings);

        // Add price
        const priceContainer = document.createElement("div");
        priceContainer.className = "product-price";
        priceContainer.innerHTML = `
          <span class="current-price">$${product.regular_price}</span>
          ${
            product.sale_price
              ? `<span class="old-price">$${product.regular_price}</span>`
              : ""
          }
        `;
        infoContainer.appendChild(priceContainer);

        // Add quantity input
        const quantityContainer = document.createElement("div");
        quantityContainer.className = "quantity-container";
        quantityContainer.innerHTML = `
          <label for="quantity-${product.id}">Quantity:</label>
          <input type="number" id="quantity-${product.id}" class="quantity-input" value="1" min="1" max="10" style="width: 60px; padding: 5px; border: 1px solid #ddd; border-radius: 4px; text-align: center;" onclick="event.stopPropagation();">
        `;
        infoContainer.appendChild(quantityContainer);

        // Add to cart button
        const addToCartBtn = document.createElement("button");
        addToCartBtn.className = "add-to-cart-btn";
        addToCartBtn.innerHTML =
          '<i class="fas fa-shopping-cart"></i> Add to Cart';
        addToCartBtn.onclick = (e) => {
          e.preventDefault(); // Prevent link navigation if inside an anchor
          e.stopPropagation(); // Prevent card click event

          // Get quantity from input
          const quantityInput = document.getElementById(
            `quantity-${product.id}`
          );
          const quantity = quantityInput
            ? parseInt(quantityInput.value) || 1
            : 1;

          if (product.quantity > 0) {
            // Prepare product data (ensure price is parsed correctly)
            const productData = {
              id: product.id,
              name: product.name,
              price: parseFloat(
                String(product.regular_price).replace(/[^0-9.]/g, "")
              ), // Ensure price is number
              image:
                product.images && product.images.length > 0
                  ? product.images[0]
                  : "",
              specs: product.specifications || "", // Assuming specs might exist
              quantity: quantity,
            };
            // Call the global addToCart function
            addToCart(productData);
          } else {
            alert("This product is currently out of stock.");
          }
        };
        infoContainer.appendChild(addToCartBtn);

        card.appendChild(infoContainer);
        return card;
      }

      // Update pagination function
      function updatePagination(pagination) {
        const paginationContainer = document.querySelector(".pagination");
        const paginationInfo = document.querySelector(".pagination-info");

        if (!paginationContainer || !paginationInfo) return;

        // Update pagination info
        paginationInfo.innerHTML = `
          <div class="items-per-page">
            <span>Items per page:</span>
            <select onchange="loadProducts(1, getCurrentFilters())">
              <option value="12" ${
                pagination.per_page === 12 ? "selected" : ""
              }>12</option>
              <option value="24" ${
                pagination.per_page === 24 ? "selected" : ""
              }>24</option>
              <option value="36" ${
                pagination.per_page === 36 ? "selected" : ""
              }>36</option>
            </select>
          </div>
        `;

        // Update pagination links
        let paginationHTML = "";

        // Previous button
        paginationHTML += `
          <a href="#" class="pagination-arrow pagination-prev ${
            pagination.current_page === 1 ? "disabled" : ""
          }" 
             onclick="event.preventDefault(); if(${
               pagination.current_page > 1
             }) loadProducts(${
          pagination.current_page - 1
        }, getCurrentFilters())">
            Previous
          </a>
        `;

        // Page numbers
        for (let i = 1; i <= pagination.total_pages; i++) {
          if (
            i === 1 ||
            i === pagination.total_pages ||
            (i >= pagination.current_page - 2 &&
              i <= pagination.current_page + 2)
          ) {
            paginationHTML += `
              <a href="#" class="pagination-page ${
                i === pagination.current_page ? "active" : ""
              }" 
                 onclick="event.preventDefault(); loadProducts(${i}, getCurrentFilters())">
                ${i}
              </a>
            `;
          } else if (
            i === pagination.current_page - 3 ||
            i === pagination.current_page + 3
          ) {
            paginationHTML += '<span class="pagination-dots">...</span>';
          }
        }

        // Next button
        paginationHTML += `
          <a href="#" class="pagination-arrow pagination-next ${
            pagination.current_page === pagination.total_pages ? "disabled" : ""
          }" 
             onclick="event.preventDefault(); if(${
               pagination.current_page < pagination.total_pages
             }) loadProducts(${
          pagination.current_page + 1
        }, getCurrentFilters())">
            Next
          </a>
        `;

        paginationContainer.innerHTML = paginationHTML;
      }

      // Get current filters function
      function getCurrentFilters() {
        const filters = {};

        // Get price range
        const minPrice = document.querySelector(
          '.price-input[placeholder="Min"]'
        )?.value;
        const maxPrice = document.querySelector(
          '.price-input[placeholder="Max"]'
        )?.value;
        if (minPrice) filters.min_price = minPrice;
        if (maxPrice) filters.max_price = maxPrice;

        // Get selected brands
        const selectedBrands = Array.from(
          document.querySelectorAll(
            '.filter-option input[type="checkbox"]:checked'
          )
        ).map((input) => input.value);
        if (selectedBrands.length > 0) filters.brand = selectedBrands;

        // Get sort order
        const sortSelect = document.querySelector(".sort-select");
        if (sortSelect) filters.sort = sortSelect.value;

        return filters;
      }

      // Add event listeners for filters
      document.querySelectorAll(".filter-option input").forEach((input) => {
        input.addEventListener("change", () => {
          loadProducts(1, getCurrentFilters());
        });
      });

      document.querySelector(".sort-select")?.addEventListener("change", () => {
        loadProducts(1, getCurrentFilters());
      });

      // Initial load
      document.addEventListener("DOMContentLoaded", () => {
        loadProducts();

        // Define addToCart and showAddToCartConfirmation globally or within scope
        // Make sure cart.js is loaded if these are defined there
        if (typeof addToCart === "undefined") {
          window.addToCart = function (product) {
            // Validate product data
            if (
              !product.id ||
              !product.name ||
              isNaN(product.price) ||
              product.price <= 0
            ) {
              console.error("Invalid product data for cart:", product);
              alert("Cannot add product with invalid details.");
              return;
            }

            console.log("Adding to cart:", product);

            // Prepare data for API call
            const formData = new FormData();
            formData.append("product_id", product.id);
            formData.append("product_name", product.name);
            formData.append("price", product.price);
            formData.append("image_url", product.image || "");
            formData.append("specs", product.specs || "");
            formData.append("quantity", product.quantity || 1);

            // Send data to server
            fetch("add_to_cart.php", {
              method: "POST",
              body: formData,
            })
              .then((response) => {
                if (!response.ok) {
                  // Attempt to read response text for more info
                  return response.text().then((text) => {
                    throw new Error(
                      `HTTP error! status: ${response.status}, message: ${text}`
                    );
                  });
                }
                return response.json();
              })
              .then((data) => {
                console.log("Add to cart response:", data);
                if (data.success) {
                  // Update cart count in the header
                  if (typeof updateCartCountInHeader !== "undefined") {
                    updateCartCountInHeader(data.cart_count);
                  } else if (typeof window.updateCartCount === "function") {
                    window.updateCartCount(); // Fallback if helper isn't defined here
                  } else {
                    console.warn("Cart count update function not found.");
                  }

                  // Show success notification
                  if (typeof showAddToCartConfirmation !== "undefined") {
                    showAddToCartConfirmation(product.name);
                  }
                } else {
                  console.error("Failed to add item to cart:", data.message);
                  alert("Failed to add item to cart: " + data.message);
                }
              })
              .catch((error) => {
                console.error("Error adding to cart:", error);
                alert(
                  "An error occurred while adding the item to cart. Check console for details."
                );
              });
          };
        }

        if (typeof showAddToCartConfirmation === "undefined") {
          window.showAddToCartConfirmation = function (productName) {
            // Create notification element
            const notification = document.createElement("div");
            notification.className = "add-to-cart-notification"; // Use existing style
            notification.style.position = "fixed";
            notification.style.top = "20px";
            notification.style.right = "20px";
            notification.style.backgroundColor = "#fff";
            notification.style.padding = "15px";
            notification.style.borderLeft = "4px solid #27ae60";
            notification.style.boxShadow = "0 2px 10px rgba(0,0,0,0.1)";
            notification.style.zIndex = "1050"; // Ensure high z-index
            notification.style.display = "flex";
            notification.style.alignItems = "center";
            notification.innerHTML = `
                  <div style="margin-right: 15px;"><i class="fas fa-check-circle" style="color: #27ae60; font-size: 1.5em;"></i></div>
                  <div style="flex-grow: 1;">
                      <p style="margin: 0 0 5px 0;"><strong>${productName}</strong> has been added to your cart.</p>
                      <a href="cart.php" style="color: #1a237e; text-decoration: none; font-weight: bold;">View Cart</a>
                  </div>
                  <button class="close-notification" style="background: none; border: none; font-size: 1.5em; cursor: pointer; color: #666; margin-left: 15px;">&times;</button>
              `;

            // Add to document
            document.body.appendChild(notification);

            // Auto remove after 5 seconds
            const timer = setTimeout(() => {
              notification.style.transition = "opacity 0.5s ease";
              notification.style.opacity = "0";
              setTimeout(() => {
                if (document.body.contains(notification)) {
                  document.body.removeChild(notification);
                }
              }, 500); // Remove after fade out
            }, 5000);

            // Close button functionality
            notification
              .querySelector(".close-notification")
              .addEventListener("click", () => {
                clearTimeout(timer); // Clear auto-remove timer
                notification.style.transition = "opacity 0.3s ease";
                notification.style.opacity = "0";
                setTimeout(() => {
                  if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                  }
                }, 300);
              });
          };
        }

        // Helper to update header cart count (if not already defined globally)
        if (typeof updateCartCountInHeader === "undefined") {
          window.updateCartCountInHeader = function (count) {
            const cartCountElements = document.querySelectorAll(".cart-count");
            cartCountElements.forEach((element) => {
              element.textContent = count;
              element.style.display = count > 0 ? "inline-block" : "none"; // Use inline-block if that's the display type
            });
          };
        }
      });
    </script>
  </body>
</html>
