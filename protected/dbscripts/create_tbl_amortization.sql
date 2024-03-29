use globaldebtmgm;

drop table if exists tbl_amortization;
create table tbl_amortization
(
    id int not null auto_increment primary key,
    payment_date datetime,
    total_monthly_cost float,
    adminstration_fee float,
    maintenance_fee float,
    settlement_savings_fund float,
    
    total_monthly_cost_total float,
    total_adminstration_fee float,
    total_maintenance_fee float,
    total_settlement_savings_fund float,
    
    created_at timestamp, 
    updated_at timestamp
    
);