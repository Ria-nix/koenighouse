'use script';

function goBack() {
    this.window.history.back();
}

function goAuth() {
    this.window.location.href = '../admin/auth/index.php';
}

function goOpen() {
    this.window.location.href = '../admin/houses/index.php';
}