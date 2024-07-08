<!DOCTYPE html>
<html>
<head>
    <title>Halaman Web dengan Tombol Cetak PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <style>
        .print-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .print-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Contoh Halaman Web</h1>
    <p>Ini adalah contoh halaman web yang akan dicetak sebagai PDF.</p>
    <button class="print-button" onclick="generatePDF()">Cetak PDF</button>

    <script>
        function generatePDF() {
            var element = document.body;
            html2pdf(element, {
                margin:       1,
                filename:     'Halaman_Web.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            });
        }
    </script>
</body>
</html>
