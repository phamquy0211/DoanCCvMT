<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Post New Product | TechHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Additional styles specific to the product posting page */
      .admin-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }

      .admin-header {
        margin-bottom: 30px;
        text-align: center;
      }

      .admin-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group.full-width {
        grid-column: span 2;
      }

      .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
      }

      .form-input,
      .form-select,
      .form-textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-family: inherit;
        font-size: 14px;
        transition: border-color 0.3s;
      }

      .form-input:focus,
      .form-select:focus,
      .form-textarea:focus {
        border-color: #4d61fc;
        outline: none;
      }

      .form-textarea {
        min-height: 120px;
        resize: vertical;
      }

      .image-upload-container {
        margin-top: 10px;
      }

      .image-preview {
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }

      .preview-item {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid #ddd;
      }

      .preview-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .remove-image {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 12px;
      }

      .checkbox-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 10px;
      }

      .checkbox-item {
        display: flex;
        align-items: center;
        gap: 6px;
      }

      .admin-actions {
        grid-column: span 2;
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 20px;
      }

      .btn-primary,
      .btn-secondary {
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
      }

      .btn-primary {
        background-color: #4d61fc;
        color: white;
      }

      .btn-primary:hover {
        background-color: #3a4cdc;
      }

      .btn-secondary {
        background-color: #e2e2e2;
        color: #333;
      }

      .btn-secondary:hover {
        background-color: #d1d1d1;
      }

      .tag-input-container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        min-height: 46px;
      }

      .tag {
        display: flex;
        align-items: center;
        background-color: #f0f4ff;
        border: 1px solid #d0d9ff;
        border-radius: 16px;
        padding: 4px 10px;
        font-size: 13px;
      }

      .tag-text {
        margin-right: 6px;
      }

      .remove-tag {
        border: none;
        background: none;
        cursor: pointer;
        color: #666;
        font-size: 12px;
      }

      .tag-input {
        flex: 1;
        min-width: 60px;
        border: none;
        outline: none;
        font-size: 14px;
        padding: 4px 0;
      }

      @media (max-width: 768px) {
        .admin-form {
          grid-template-columns: 1fr;
        }

        .form-group.full-width,
        .admin-actions {
          grid-column: span 1;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="navbar-container">
        <a href="index.php" class="logo">Tech<span>Hub</span></a>
        <div class="mobile-toggle" id="mobile-toggle">☰</div>

        <!-- Navigation Links -->
        <ul class="nav-links" id="nav-links">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Computers ▾</a>
            <div class="dropdown-content">
              <a href="desktop.php">Desktop</a>
              <a href="#">Laptop</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#">Components ▾</a>
            <div class="dropdown-content">
              <a href="processor.php">Processors</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#">Peripherals ▾</a>
            <div class="dropdown-content">
              <a href="monitor.php">Monitors</a>
            </div>
          </li>
          <li><a href="deal.php">Deals</a></li>
          <li><a href="support.php">Support</a></li>
          <li><a href="admin/dashboard.php" class="active">Admin</a></li>
        </ul>

        <!-- Icons for Admin Dashboard -->
        <div class="icons">
          <div class="icon notification-icon" id="notification-icon">
            <i class="fas fa-bell"></i>
            <span class="notification-count">4</span>
          </div>
          <div class="icon" id="account-icon">
            <i class="fas fa-user-shield"></i>
          </div>
        </div>
      </div>
    </nav>

    <!-- Overlay for Modal or Sidebar -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <main>
      <div class="admin-container">
        <div class="admin-header">
          <h1>Add New Product</h1>
          <p>Enter product details to add a new item to the store</p>
        </div>

        <form
          class="admin-form"
          id="product-form"
          action="admin/add_product.php"
          method="POST"
          enctype="multipart/form-data"
        >
          <!-- Basic Information -->
          <div class="form-group">
            <label class="form-label" for="product-name">Product Name*</label>
            <input
              type="text"
              id="product-name"
              name="name"
              class="form-input"
              required
            />
          </div>

          <div class="form-group">
            <label class="form-label" for="product-category">Category*</label>
            <select
              id="product-category"
              name="category"
              class="form-select"
              required
            >
              <option value="">Select a category</option>
              <option value="desktop">Desktop PCs</option>
              <option value="laptop">Laptops</option>
              <option value="gaming">Gaming PCs</option>
              <option value="workstation">Workstations</option>
              <option value="mini-pc">Mini PCs</option>
              <option value="processor">Processors</option>
              <option value="motherboard">Motherboards</option>
              <option value="graphics-card">Graphics Cards</option>
              <option value="memory">Memory (RAM)</option>
              <option value="storage">Storage</option>
              <option value="power-supply">Power Supplies</option>
              <option value="cooling">Cooling</option>
              <option value="case">Cases</option>
              <option value="monitor">Monitors</option>
              <option value="keyboard">Keyboards</option>
              <option value="mouse">Mice</option>
              <option value="headset">Headsets</option>
              <option value="speaker">Speakers</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="product-brand">Brand*</label>
            <select
              id="product-brand"
              name="brand"
              class="form-select"
              required
            >
              <option value="">Select a brand</option>
              <option value="acer">Acer</option>
              <option value="amd">AMD</option>
              <option value="apple">Apple</option>
              <option value="asus">ASUS</option>
              <option value="corsair">Corsair</option>
              <option value="dell">Dell</option>
              <option value="gigabyte">Gigabyte</option>
              <option value="hp">HP</option>
              <option value="intel">Intel</option>
              <option value="lenovo">Lenovo</option>
              <option value="logitech">Logitech</option>
              <option value="msi">MSI</option>
              <option value="nvidia">NVIDIA</option>
              <option value="razer">Razer</option>
              <option value="samsung">Samsung</option>
              <option value="other">Other</option>
            </select>
          </div>

          <!-- Pricing Information -->
          <div class="form-group">
            <label class="form-label" for="product-price"
              >Regular Price ($)*</label
            >
            <input
              type="number"
              id="product-price"
              name="regular_price"
              class="form-input"
              step="0.01"
              min="0"
              required
            />
          </div>

          <!-- Inventory Information -->
          <div class="form-group">
            <label class="form-label" for="product-quantity"
              >Stock Quantity*</label
            >
            <input
              type="number"
              id="product-quantity"
              name="quantity"
              class="form-input"
              min="0"
              required
            />
          </div>

          <div class="form-group">
            <label class="form-label" for="product-status">Status*</label>
            <select
              id="product-status"
              name="status"
              class="form-select"
              required
            >
              <option value="in-stock">In Stock</option>
              <option value="out-of-stock">Out of Stock</option>
              <option value="backorder">Backorder</option>
              <option value="pre-order">Pre-order</option>
              <option value="discontinued">Discontinued</option>
            </select>
          </div>

          <!-- Product Details -->
          <div class="form-group full-width">
            <label class="form-label" for="product-description"
              >Product Description*</label
            >
            <textarea
              id="product-description"
              name="description"
              class="form-textarea"
              required
            ></textarea>
          </div>

          <div class="form-group full-width">
            <label class="form-label" for="product-specifications"
              >Technical Specifications</label
            >
            <textarea
              id="product-specifications"
              name="specifications"
              class="form-textarea"
            ></textarea>
          </div>

          <!-- Image Upload -->
          <div class="form-group full-width">
            <label class="form-label">Product Images*</label>
            <div class="image-upload-container">
              <input
                type="file"
                id="product-images"
                name="images[]"
                accept="image/*"
                multiple
                class="form-input"
                required
              />
              <p class="input-help">
                Upload up to 6 product images. First image will be used as the
                main product image.
              </p>
              <div class="image-preview" id="image-preview">
                <!-- Image previews will be added here dynamically -->
              </div>
            </div>
          </div>

          <!-- Tags -->
          <div class="form-group full-width">
            <label class="form-label" for="product-tags">Product Tags</label>
            <div class="tag-input-container" id="tags-container">
              <!-- Added tags will appear here -->
              <input
                type="text"
                id="tag-input"
                class="tag-input"
                placeholder="Type and press Enter to add tags"
              />
            </div>
            <p class="input-help">
              Add relevant tags to improve product searchability
            </p>
            <input type="hidden" name="tags[]" id="tags-input" />
          </div>

          <!-- Product Features -->
          <div class="form-group full-width">
            <label class="form-label">Special Features</label>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input
                  type="checkbox"
                  id="feature-new"
                  name="features[]"
                  value="new"
                />
                <label for="feature-new">New Arrival</label>
              </div>
              <div class="checkbox-item">
                <input
                  type="checkbox"
                  id="feature-bestseller"
                  name="features[]"
                  value="bestseller"
                />
                <label for="feature-bestseller">Best Seller</label>
              </div>
              <div class="checkbox-item">
                <input
                  type="checkbox"
                  id="feature-sale"
                  name="features[]"
                  value="sale"
                />
                <label for="feature-sale">On Sale</label>
              </div>
              <div class="checkbox-item">
                <input
                  type="checkbox"
                  id="feature-featured"
                  name="features[]"
                  value="featured"
                />
                <label for="feature-featured">Featured Product</label>
              </div>
              <div class="checkbox-item">
                <input
                  type="checkbox"
                  id="feature-limited"
                  name="features[]"
                  value="limited"
                />
                <label for="feature-limited">Limited Edition</label>
              </div>
            </div>
          </div>

          <!-- Form Actions -->
          <div class="admin-actions">
            <button type="button" class="btn-secondary" id="cancel-btn">
              Cancel
            </button>
            <button type="submit" class="btn-primary" id="save-product">
              Save Product
            </button>
          </div>
        </form>
      </div>
    </main>
    <!-- Footer Section -->
    <?php include "footer.html"; ?>

    <!-- Back to top button -->
    <button id="back-to-top" class="back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript for the page functionality -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Image preview functionality
        const imageInput = document.getElementById("product-images");
        const imagePreview = document.getElementById("image-preview");

        imageInput.addEventListener("change", function () {
          imagePreview.innerHTML = "";

          if (this.files) {
            const maxFiles = 6;
            const files = Array.from(this.files).slice(0, maxFiles);

            files.forEach((file) => {
              const reader = new FileReader();

              reader.onload = function (e) {
                const previewItem = document.createElement("div");
                previewItem.className = "preview-item";

                const img = document.createElement("img");
                img.src = e.target.result;

                const removeButton = document.createElement("button");
                removeButton.className = "remove-image";
                removeButton.innerHTML = "×";
                removeButton.addEventListener("click", function () {
                  previewItem.remove();
                });

                previewItem.appendChild(img);
                previewItem.appendChild(removeButton);
                imagePreview.appendChild(previewItem);
              };

              reader.readAsDataURL(file);
            });
          }
        });

        // Tags input functionality
        const tagsContainer = document.getElementById("tags-container");
        const tagInput = document.getElementById("tag-input");
        const tags = [];

        tagInput.addEventListener("keydown", function (e) {
          if (e.key === "Enter" && this.value.trim() !== "") {
            e.preventDefault();

            const tagValue = this.value.trim();
            if (!tags.includes(tagValue)) {
              tags.push(tagValue);
              addTag(tagValue);
              this.value = "";
            }
          }
        });

        function addTag(tagText) {
          const tag = document.createElement("div");
          tag.className = "tag";

          const span = document.createElement("span");
          span.className = "tag-text";
          span.textContent = tagText;

          const removeButton = document.createElement("button");
          removeButton.className = "remove-tag";
          removeButton.innerHTML = "×";
          removeButton.addEventListener("click", function () {
            const index = tags.indexOf(tagText);
            if (index > -1) {
              tags.splice(index, 1);
            }
            tag.remove();
          });

          tag.appendChild(span);
          tag.appendChild(removeButton);
          tagsContainer.insertBefore(tag, tagInput);
        }

        // Update form submission
        const productForm = document.getElementById("product-form");
        const cancelBtn = document.getElementById("cancel-btn");

        productForm.addEventListener("submit", function (e) {
          e.preventDefault();

          // Update hidden inputs with tags and features
          document.getElementById("tags-input").value = JSON.stringify(tags);

          // Submit the form
          this.submit();
        });

        cancelBtn.addEventListener("click", function () {
          if (
            confirm(
              "Are you sure you want to cancel? All entered data will be lost."
            )
          ) {
            window.location.href = "admin-products.php";
          }
        });

        // Mobile navigation toggle
        const mobileToggle = document.getElementById("mobile-toggle");
        const navLinks = document.getElementById("nav-links");

        mobileToggle.addEventListener("click", function () {
          navLinks.classList.toggle("active");
        });

        // Notification panel toggle
        const notificationIcon = document.getElementById("notification-icon");
        const notificationPanel = document.getElementById("notification-panel");
        const overlay = document.getElementById("overlay");

        notificationIcon.addEventListener("click", function () {
          notificationPanel.classList.toggle("active");
          overlay.classList.toggle("active");
        });

        overlay.addEventListener("click", function () {
          notificationPanel.classList.remove("active");
          overlay.classList.remove("active");
        });
      });
    </script>
  </body>
</html>
