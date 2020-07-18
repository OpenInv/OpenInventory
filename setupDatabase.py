import sqlite3
conn = sqlite3.connect('openinventory.db')

c = conn.cursor()

c.execute('''
    CREATE TABLE IF NOT EXISTS inventory (
        id INTEGER PRIMARY KEY,
        parent INTEGER,
        name TEXT NOT NULL,
        description TEXT,
        qty INTEGER,
        tags TEXT,
        image TEXT,
        product_id INTEGER,
        create_time INTEGER
    );

''')
