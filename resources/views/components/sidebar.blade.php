<div class="sidebar">
      <!-- Tombol navigasi -->
      <button>
        <span>➕</span>
        <a href="{{ route('postpublish') }}" style="text-decoration: none; color: black"
          >Publish Your Idea</a
        >
      </button>
      <button class="active">
        <span>👥</span
        ><a href="{{ route('group') }}" style="text-decoration: none; color: black">
          Group</a
        >
      </button>

      <button>
        <span>🛒</span
        ><a href="{{ route('products.index') }}" style="text-decoration: none; color: black">
          Product</a
        >
      </button>
      <button>
        <span>✏️</span>
        <a href="{{ route('editp') }}" style="text-decoration: none; color: black"
          >Edit</a\
        >
      </button>
      <button>
        <span>⚙️</span>
        <a href="{{ route('setting') }}" style="text-decoration: none; color: black"
          >Settings</a
        >
      </button>
      <!-- Tombol premium di paling bawah -->
      <div class="premium-btn">
        👑
        <a
          href="upgradepremiumpage.html"
          style="text-decoration: none; color: white"
          >Upgrade to Premium</a
        >
      </div>
    </div>