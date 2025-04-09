<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Processors - TechHub</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Additional styles for processors page */
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
        <h1>Processors</h1>
        <nav class="breadcrumb">
          <a href="index.php">Home</a> /
          <a href="#">Components</a> /
          <span>Processors</span>
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
            <div class="filter-tag">AMD <i class="fas fa-times"></i></div>
            <div class="filter-tag">
              $200 - $400 <i class="fas fa-times"></i>
            </div>
            <div class="filter-tag">8-Core <i class="fas fa-times"></i></div>
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
                  value="400"
                />
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-1" />
                <label for="price-1">$0 - $99</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-2" />
                <label for="price-2">$100 - $199</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-3" checked />
                <label for="price-3">$200 - $399</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-4" />
                <label for="price-4">$400 - $699</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="price-5" />
                <label for="price-5">$700+</label>
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
                <label for="brand-1">AMD (32)</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="brand-2" />
                <label for="brand-2">Intel (28)</label>
              </div>
            </div>
          </div>

          <!-- Socket Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Socket <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="socket-1" />
                <label for="socket-1">AM4</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="socket-2" />
                <label for="socket-2">AM5</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="socket-3" />
                <label for="socket-3">LGA 1700</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="socket-4" />
                <label for="socket-4">LGA 1200</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="socket-5" />
                <label for="socket-5">LGA 1151</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="socket-6" />
                <label for="socket-6">TR4</label>
              </div>
            </div>
          </div>

          <!-- Cores Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Cores <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="cores-1" />
                <label for="cores-1">2-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-2" />
                <label for="cores-2">4-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-3" />
                <label for="cores-3">6-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-4" checked />
                <label for="cores-4">8-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-5" />
                <label for="cores-5">10-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-6" />
                <label for="cores-6">12-Core</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="cores-7" />
                <label for="cores-7">16-Core+</label>
              </div>
            </div>
          </div>

          <!-- Series Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Series <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="series-1" />
                <label for="series-1">AMD Ryzen 3</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-2" />
                <label for="series-2">AMD Ryzen 5</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-3" checked />
                <label for="series-3">AMD Ryzen 7</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-4" />
                <label for="series-4">AMD Ryzen 9</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-5" />
                <label for="series-5">AMD Threadripper</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-6" />
                <label for="series-6">Intel Core i3</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-7" />
                <label for="series-7">Intel Core i5</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-8" />
                <label for="series-8">Intel Core i7</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="series-9" />
                <label for="series-9">Intel Core i9</label>
              </div>
            </div>
          </div>

          <!-- TDP Filter -->
          <div class="filter-section">
            <div class="filter-title">
              TDP <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="tdp-1" />
                <label for="tdp-1">35W - 65W</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="tdp-2" />
                <label for="tdp-2">65W - 95W</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="tdp-3" />
                <label for="tdp-3">95W - 125W</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="tdp-4" />
                <label for="tdp-4">125W+</label>
              </div>
            </div>
          </div>

          <!-- Integrated Graphics Filter -->
          <div class="filter-section">
            <div class="filter-title">
              Integrated Graphics <i class="fas fa-chevron-down"></i>
            </div>
            <div class="filter-content">
              <div class="filter-option">
                <input type="checkbox" id="graphics-1" />
                <label for="graphics-1">With Integrated Graphics</label>
              </div>
              <div class="filter-option">
                <input type="checkbox" id="graphics-2" />
                <label for="graphics-2">Without Integrated Graphics</label>
              </div>
            </div>
          </div>
        </aside>
        <div class="products-grid">
          <div class="products-header">
            <div class="products-count">Showing 1-12 of 60 products</div>
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
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 7 5800X" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 7 5800X 8-Core 3.8 GHz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(143)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$299.99</span>
                  <span class="old-price">$449.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-1">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-1"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
              <div class="product-badge sale-badge">Sale -20%</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="Intel Core i7-12700K"
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
                <div class="product-category">Intel Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >Intel Core i7-12700K 12-Core (8P+4E)</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(98)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$359.99</span>
                  <span class="old-price">$449.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-2">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-2"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
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
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 7 7800X3D" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 7 7800X3D 8-Core AM5</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(67)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$399.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-3">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-3"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
              <div class="product-badge">Value Pick</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 5 5600X" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 5 5600X 6-Core 3.7 GHz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(214)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$169.99</span>
                  <span class="old-price">$299.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-4">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-4"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
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
                  alt="Intel Core i5-13600K"
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
                <div class="product-category">Intel Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >Intel Core i5-13600K 14-Core (6P+8E)</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(89)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$299.99</span>
                  <span class="old-price">$349.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-5">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-5"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
              <div class="product-badge top-badge">Top Performance</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 9 7950X" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 9 7950X 16-Core AM5</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(52)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$599.99</span>
                  <span class="old-price">$699.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-6">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-6"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
              <div class="product-badge new-badge">New Gen</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="Intel Core i9-14900K"
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
                <div class="product-category">Intel Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >Intel Core i9-14900K 24-Core (8P+16E)</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(34)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$599.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-7">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-7"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
              <div class="product-badge">Best Value</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="Intel Core i3-12100F"
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
                <div class="product-category">Intel Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >Intel Core i3-12100F 4-Core LGA1700</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(128)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$99.99</span>
                  <span class="old-price">$119.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-8">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-8"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 9 -->
            <div class="product-card">
              <div class="product-badge sale-badge">Sale -25%</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 9 5900X" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 9 5900X 12-Core 3.7 GHz</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(187)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$349.99</span>
                  <span class="old-price">$469.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-9">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-9"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card">
              <div class="product-badge">Budget Pick</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 5 4500" />
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
                <div class="product-category">AMD Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php">AMD Ryzen 5 4500 6-Core AM4</a>
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <span class="rating-count">(95)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$79.99</span>
                  <span class="old-price">$129.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-10">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-10"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 11 -->
            <div class="product-card">
              <div class="product-badge top-badge">Extreme</div>
              <div class="product-image">
                <img
                  src="/api/placeholder/240/180"
                  alt="AMD Ryzen Threadripper PRO 5975WX"
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
                <div class="product-category">AMD Workstation Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Threadripper PRO 5975WX 32-Core</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span class="rating-count">(24)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$1,899.99</span>
                  <span class="old-price">$2,299.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-11">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-11"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>

            <!-- Product 12 -->
            <div class="product-card">
              <div class="product-badge">APU</div>
              <div class="product-image">
                <img src="/api/placeholder/240/180" alt="AMD Ryzen 7 5700G" />
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
                <div class="product-category">AMD APU Processors</div>
                <h3 class="product-name">
                  <a href="detailProduct.php"
                    >AMD Ryzen 7 5700G 8-Core with Radeon Graphics</a
                  >
                </h3>
                <div class="product-ratings">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="rating-count">(72)</span>
                </div>
                <div class="product-price">
                  <span class="current-price">$229.99</span>
                  <span class="old-price">$359.99</span>
                </div>
                <div class="quantity-container">
                  <label for="quantity-12">Quantity:</label>
                  <input
                    type="number"
                    id="quantity-12"
                    class="quantity-input"
                    value="1"
                    min="1"
                    max="10"
                    style="
                      width: 60px;
                      padding: 5px;
                      border: 1px solid #ddd;
                      border-radius: 4px;
                      text-align: center;
                    "
                    onclick="event.stopPropagation();"
                  />
                </div>
                <button class="add-to-cart-btn">
                  <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div class="pagination-container">
            <div class="pagination">
              <a href="#" class="pagination-arrow pagination-prev">Previous</a>
              <a href="#" class="pagination-dots">...</a>
              <a href="#" class="pagination-page">1</a>
              <a href="#" class="pagination-page">2</a>
              <a href="#" class="pagination-page">3</a>
              <a href="#" class="pagination-dots">...</a>
              <a href="#" class="pagination-arrow pagination-next">Next</a>
            </div>
            <div class="pagination-info">
              <div class="items-per-page">
                <span>Items per page:</span>
                <select>
                  <option>12</option>
                  <option>24</option>
                  <option>36</option>
                </select>
              </div>
            </div>
          </div>
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
          category: "processor",
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
        category.textContent = `${product.brand} Processors`;
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
