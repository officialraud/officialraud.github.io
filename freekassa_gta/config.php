<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '233339';
    const SECRET_KEY_1 = 'eprpbtwt';
    const SECRET_KEY_2 = 'pvsv0osd';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 1;

    // ������� ���������� ������, �������� `accounts`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'login';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'redbucks';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = '31.31.198.55';
    // ��� ������������
    const DB_USER = 'u1083682_elpato';
    // ������
    const DB_PASS = 'rhjyjcnfh1337';
    // �������� ����
    const DB_NAME = 'u1083682_gta5rp';
}