const ctx = document.getElementById('myChart');
const earning = document.getElementById('earning');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Mô Phỏng', 'Phiêu Lưu', 'Hành Động', 'Nhập Vai', 'Chiến Thuật', 'Thể thao'],
        datasets: [{
            label: 'Số lượng bán ra',
            data: [10, 25, 100, 45, 12, 3],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
    }
});

new Chart(earning, {
    type: 'bar',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12',],
        datasets: [{
            label: 'Doanh thu',
            data: [4500000, 22000000, 35000000, 45000000, 25000000, 25000000, 15500000, 17500000, 19500000, 20000000, 8500000, 9950000],
            backgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(75,192,192,1)',
                'rgba(153,102,255,1)',
                'rgba(255,159,64,1)',
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(75,192,192,1)',
                'rgba(153,102,255,1)',
                'rgba(255,159,64,1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
    }
});
