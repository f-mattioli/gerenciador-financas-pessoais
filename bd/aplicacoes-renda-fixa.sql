CREATE TABLE aplicacoes_renda_fixa (
    id SERIAL PRIMARY KEY,
    valor_aplicado MONEY NOT NULL,
    data_aplicacao DATE NOT NULL,
    valor_atual MONEY NOT NULL,
    usuario_id INTEGER NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
