    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#formtambah').validate({ // initialize the plugin
                rules: {
                    nama_provinsi: {
                        required: true,
                    },
                    positif: {
                        required: true,
                        number: true,
                    },
                    sembuh: {
                        required: true,
                    },
                    meninggal: {
                        required: true,
                    },
                },
                messages: {
                    nama_provinsi: "Masukkan Nama Provinsi",
                    positif: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    },
                    sembuh: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    },
                    meninggal: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    }
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $('#formedit').validate({ // initialize the plugin
                rules: {
                    nama_provinsi: {
                        required: true,
                    },
                    positif: {
                        required: true,
                        number: true,
                    },
                    sembuh: {
                        required: true,
                    },
                    meninggal: {
                        required: true,
                    },
                },
                messages: {
                    nama_provinsi: "Masukkan Nama Provinsi",
                    positif: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    },
                    sembuh: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    },
                    meninggal: {
                        required: "Masukkan Nilai",
                        number: "Masukkan dalam bentuk angka",
                    }
                }
            });

        });
    </script>
</body>
</html>
