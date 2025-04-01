<div class="shipment-section">
    <div class="container">
        <h2 class="section-title">Поставка</h2>
        <table class="shipment-list" border="1">
            <thead>
                <tr>
                    <th>shipment_id</th>
                    <th>status</th>
                    <th>from_id</th>
                    <th>to_id</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < $rnum; $i++): ?>
                <tr>
                    <td class="shipment-id"><?= htmlspecialchars($shipment[$i]['shipment_id']) ?></td>
                    <td class="shipment-status"><?= htmlspecialchars($shipment[$i]['status']) ?></td>
                    <td class="shipment-from"><?= htmlspecialchars($shipment[$i]['from_id']) ?></td>
                    <td class="shipment-to"><?= htmlspecialchars($shipment[$i]['to_id']) ?></td>
                    <td>
                        <?php if ($shipment[$i]['status'] !== 'выполнено'): ?>
                            <form action="update_status.php" method="post">
                                <input type="hidden" name="shipment_id" value="<?= $shipment[$i]['shipment_id'] ?>">
                                <button type="submit">Принять</button>
                            </form>
                        <?php else: ?>
                            <span>Выполнено</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
