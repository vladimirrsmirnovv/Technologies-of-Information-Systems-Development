<div class="orders-section">
    <div class="container">
        <h2 class="section-title">Заказы</h2>
        <table class="orders-list" border="1">
            <thead>
                <tr>
                    <th>order_id</th>
                    <th>user_id</th>
                    <th>status</th>
                    <th>pvz_id</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < $rnum; $i++): ?>
                <tr>
                    <td class="order-id"><?= htmlspecialchars($orders[$i]['order_id']) ?></td>
                    <td class="user-id"><?= htmlspecialchars($orders[$i]['user_id']) ?></td>
                    <td class="order-status"><?= htmlspecialchars($orders[$i]['status']) ?></td>
                    <td class="pvz-id"><?= htmlspecialchars($orders[$i]['pvz_id']) ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
