<form action="{{ route('CongTung.Delete', $ctLoaiSanPham->id) }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này?');">Xóa</button>
</form>