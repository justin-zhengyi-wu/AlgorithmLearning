/**
 * 
 */
package justin.test;

import java.util.AbstractCollection;

import justin.util.Comparator;
import justin.util.Iterator;
import justin.util.SortedSet;

/**
 * @author Justin Wu
 * 
 */
public class TreeSet<T> extends AbstractCollection<T> implements SortedSet<T> {

    public TreeSet() {
    }

    /**
     * @param reverseOrder
     */
    public TreeSet(Comparator<Object> reverseOrder) {
        this();
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#size()
     */
    @Override
    public int size() {
        // TODO Auto-generated method stub
        return 0;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#isEmpty()
     */
    @Override
    public boolean isEmpty() {
        // TODO Auto-generated method stub
        return false;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#contains(java.lang.Object)
     */
    @Override
    public boolean contains(Object x) {
        // TODO Auto-generated method stub
        return false;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#add(java.lang.Object)
     */
    @Override
    public boolean add(Object x) {
        // TODO Auto-generated method stub
        return false;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#remove(java.lang.Object)
     */
    @Override
    public boolean remove(Object x) {
        // TODO Auto-generated method stub
        return false;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#clear()
     */
    @Override
    public void clear() {
        // TODO Auto-generated method stub

    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#iterator()
     */
    @Override
    public Iterator<T> iterator() {
        // TODO Auto-generated method stub
        return null;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#toArray()
     */
    @Override
    public Object[] toArray() {
        // TODO Auto-generated method stub
        return null;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.Collection#toArray(OtherType[])
     */
    @Override
    public <OtherType> OtherType[] toArray(OtherType[] arr) {
        // TODO Auto-generated method stub
        return null;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.SortedSet#comparator()
     */
    @Override
    public Comparator<? super T> comparator() {
        // TODO Auto-generated method stub
        return null;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.SortedSet#first()
     */
    @Override
    public T first() {
        // TODO Auto-generated method stub
        return null;
    }

    /*
     * (non-Javadoc)
     * 
     * @see justin.util.SortedSet#last()
     */
    @Override
    public T last() {
        // TODO Auto-generated method stub
        return null;
    }

}
