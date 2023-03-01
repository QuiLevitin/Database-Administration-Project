paste db commands here



insert into saletotal(InvoiceNumber, QuantityTotal, GrossAmountTotal, DiscountTotal, NetAmountTotal, FactoredAmountTotal )
select InvoiceNumber, sum(Quantity), sum(GrossAmount), sum(Discount), sum(NetAmount), sum(FactoredAmount)
from productinfo
where InvoiceNumber = 016943
group by InvoiceNumber;

